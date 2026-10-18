<?php

/**
 * Halaman publik dari CMS (rilis 24: dua bahasa). Rute (routes/web.php): '/' dan '/id' (tanpa $slug = BERANDA bahasa itu),
 * '/{slug}' (EN) dan '/id/{slug}' (ID), yang terakhir didaftarkan PALING AKHIR.
 * Bahasa = awalan alamat (App\Content\Languages::forRequest), BUKAN bahasa tempat slug kebetulan cocok. Slug dicari KETAT di bahasa itu:
 * slug bahasa lain yang halamannya punya padanan di bahasa ini dialihkan 301 ke padanannya (/about-us di /id -> /id/tentang-kami), selain itu 404.
 * Beranda = halaman ber-slug config('cms.home_slug') bahasa itu. Alamat "/home" (EN) atau "/id/beranda" (ID) dialihkan 301 ke jalur beranda
 * (satu halaman, satu alamat). Beranda belum dibuat atau offline = 503 "situs sedang disiapkan" (bukan 404).
 * Semua logika ada di App\Content\PublicLookup (diuji). Judul/deskripsi dibagikan sebagai $title dan $description (partials/head.blade.php);
 * $alternates (bahasa => alamat) dipakai sakelar bahasa di header dan tag hreflang.
 */

use App\Content\ArticleListing;
use App\Content\ArticleTags;
use App\Content\Blocks\BlockSanitizer;
use App\Content\Languages;
use App\Content\Links\LinkResolver;
use App\Content\Names;
use App\Content\PublicLookup;
use App\Content\Visits;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Locked;
use Livewire\Component;

new #[Layout('components.layouts.app')] class extends Component {
  #[Locked]
  public int $pageId = 0;

  #[Locked]
  public string $lang = 'en';

  public function mount(?string $slug = null): void
  {
    $this->lang = Languages::forRequest();
    $locales = Languages::fromConfig()['locales'];
    $homeSlug = Languages::homeSlug(config('cms.home_slug'), $this->lang);

    // Rilis 52: rute bernama 'articles' / 'id.articles' (/articles, /id/artikel) kini juga halaman CMS: slug kepala daftar artikel bahasa itu
    // (config('cms.articles_index_slug')). Nama rute dipertahankan supaya route('articles') di templat Anda tetap jalan. Halamannya belum dibuat atau
    // offline = 404 (disengaja: kekeliruan harus ketahuan, tidak ada halaman bawaan).
    if ($slug === null && in_array(request()->route()?->getName(), ['articles', 'id.articles'], true)) {
      $slug = Languages::indexSlug(config('cms.articles_index_slug'), $this->lang);
    }

    if ($slug !== null && $slug === $homeSlug) {
      throw new \Illuminate\Http\Exceptions\HttpResponseException(redirect(LinkResolver::homeAddress($this->lang) ?? '/', 301));   // /home -> /, /id/beranda -> /id
    }

    $isHome = $slug === null;   // rute '/' dan '/id' tidak punya parameter
    $found = PublicLookup::findPage($isHome ? $homeSlug : $slug, $this->lang, $locales);
    if ($isHome && ($found === null || $found['redirect'] !== null)) {
      abort(503, 'Situs sedang disiapkan.', ['Retry-After' => '3600']);   // beranda bahasa ini belum ada atau offline
    }
    abort_if($found === null, 404);   // tidak ada, offline, belum diterjemahkan, atau slug tidak sah

    if ($found['redirect'] !== null) {   // slug bahasa lain: ke padanannya di bahasa ALAMAT ini
      $to = LinkResolver::address('page', $found['redirect'], $this->lang);
      abort_if($to === null, 404);
      throw new \Illuminate\Http\Exceptions\HttpResponseException(redirect($to, 301));
    }

    $this->pageId = (int) $found['model']->id;

    $page = $found['model'];
    view()->share('title', Names::exact($page->getRawOriginal('meta_title'), $this->lang) ?: Names::exact($page->getRawOriginal('title'), $this->lang));
    view()->share('description', Names::exact($page->getRawOriginal('meta_description'), $this->lang));
    view()->share('alternates', PublicLookup::alternateUrls('page', $page, $locales));

    $this->prepareListing($page, $locales);

    Visits::track('page', $this->pageId, $this->lang);   // rilis 79: hitungan kunjungan harian (tanpa cookie/IP), setelah respons terkirim; tidak pernah melempar galat
  }

  /**
   * Daftar artikel di halaman ini (rilis 52): bila halaman punya blok Artikel Terbaru UTAMA (berhalaman atau bersaringan), alamatnya diperiksa
   * di sini, sebelum tampilan dibuat: slug kategori bahasa lain -> 301 ke slug bahasa halaman; ?page=N di luar jangkauan -> 404;
   * canonical per tampilan (kategori + tag + halaman), judul diberi nama kategori, " — Tag: nama" (rilis 54: ?tag=, slug tag bahasa lain -> 301 juga) dan "(halaman N)". Hasil daftar dibagikan ke renderer blok
   * ($articleListingPre) supaya kueri yang sama tidak dijalankan dua kali.
   */
  private function prepareListing(object $page, array $locales): void
  {
    $doc = PublicLookup::document($page->getRawOriginal('content'), $locales, true, $this->lang);
    $primary = ArticleListing::primaryId($doc['blocks'], $doc['order']);
    if ($primary === null) {
      return;
    }
    $clean = BlockSanitizer::forType('latest-articles-builder', $doc['blocks'][$primary]['data'] ?? [], array_values(array_unique([$this->lang, 'en', 'id'])));
    $query = (array) request()->query();
    try {
      $listing = PublicLookup::listing($clean, $primary, $primary, $this->lang, $locales, $query);
    } catch (\Throwable $e) {   // basis data bermasalah: biarkan halaman tampil; renderer blok menangani galat yang sama sendiri
      report($e);

      return;
    }

    if ($listing['redirect'] !== null || $listing['tagRedirect'] !== null) {   // ?category= / ?tag= berslug bahasa lain -> slug bahasa halaman ini
      $fix = [];
      if ($listing['redirect'] !== null) {
        $fix[ArticleListing::FILTER] = $listing['redirect'];
      }
      if ($listing['tagRedirect'] !== null) {
        $fix[ArticleListing::TAG] = $listing['tagRedirect'];
      }
      throw new \Illuminate\Http\Exceptions\HttpResponseException(redirect(url()->current() . ArticleListing::href($query, $fix), 301));
    }
    $paged = $clean['paging'] === 'pages';
    $requested = $listing['requestedPage'];
    abort_if($paged && $requested !== null && $requested > max(1, (int) $listing['found']['pages']), 404);   // halaman di luar jangkauan

    $pageNo = $paged ? (int) $listing['found']['page'] : 1;
    $active = $listing['active'];
    $title = (string) view()->shared('title', '');
    if ($active !== null) {
      $title .= ' — ' . $active['name'];
    }
    $tag = $listing['activeTag'];
    if ($tag !== null) {
      $title .= ArticleTags::titleSuffix($tag['name']);   // rilis 54: " — Tag: nama"
    }
    if ($pageNo > 1) {
      $title .= ($this->lang === 'id' ? ' (halaman ' : ' (page ') . $pageNo . ')';
    }
    view()->share('title', $title);
    $qs = ArticleListing::href([], [ArticleListing::FILTER => $active['slug'] ?? null, ArticleListing::TAG => $tag['slug'] ?? null, ArticleListing::PAGE => $pageNo]);   // '?' bila kosong
    view()->share('canonical', url()->current() . ($qs === '?' ? '' : $qs));   // PER TAMPILAN: halaman 2 dan kategori tidak menyatakan dirinya sama dengan halaman 1
    view()->share('articleListingPre', ['id' => $primary, 'result' => $listing]);
  }

  /** Permintaan pembaruan Livewire (/livewire/update) tidak membawa awalan bahasa: pulihkan dari properti terkunci. */
  public function hydrate(): void
  {
    app()->setLocale($this->lang);
  }

  /** Isi sendiri + snippet sisipan + snippet penutup, sudah dibersihkan. */
  #[Computed]
  public function document(): array
  {
    $page = \App\Models\Page::query()->findOrFail($this->pageId);

    return PublicLookup::document($page->getRawOriginal('content'), Languages::fromConfig()['locales'], true, $this->lang);
  }
};
?>

<div>
  <x-content.sections
    :blocks="$this->document['blocks']"
    :order="$this->document['order']"
    :settings="$this->document['settings']"
    :lang="$lang"
  />
</div>