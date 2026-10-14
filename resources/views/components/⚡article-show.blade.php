<?php

/**
 * Artikel publik (rilis 24): /articles/{slug} (EN) dan /id/artikel/{slug} (ID); bahasa = awalan alamat. Slug dicari KETAT di bahasa itu;
 * slug bahasa lain yang artikelnya punya padanan di bahasa ini dialihkan 301 ke padanannya, selain itu 404.
 * Kolom `content` artikel lama berisi HTML mentah: PublicLookup::document membaca NILAI MENTAH dan mengimpornya sebagai satu blok Paragraf.
 * JANGAN mencetak {!! $article->content !!} atau {!! $article->title !!}: judul berbentuk JSON per bahasa, isi dirender lewat <x-content.sections>.
 * Rilis 47: thumbnail (kolom featured_image, sama dengan kartu) tampil sebagai gambar lebar di bawah judul DAN menjadi og:image (alamat mutlak).
 * Tanpa thumbnail: tidak ada gambar di halaman, og:image jatuh ke gambar bawaan situs (head.blade.php).
 * Rilis 53: kepala selebar isi (max-w-7xl), judul lebih besar, dan baris "Ditulis oleh {penulis}" di samping tanggal bila artikelnya mencentang
 * "Tampilkan nama penulis" di CMS (settings.show_author di kolom content; tanpa migrasi). Tanpa centang = tidak tampil.
 * Rilis 54: deretan TAG di bawah isi (tiap tag menaut ke "{daftar artikel}?tag=slug") dan "Artikel terkait" (artikel lain yang berbagi tag;
 * disembunyikan per artikel lewat settings.hide_related, kotak centang "Sembunyikan artikel terkait" di CMS). Tanpa tag = keduanya tidak tampil.
 * Rilis 56: gambar utama (thumbnail) bisa disembunyikan per artikel lewat settings.hide_hero ("Sembunyikan thumbnail di halaman artikel" di CMS);
 * kartu dan og:image tetap memakai thumbnail itu.
 */

use App\Content\ArticleByline;
use App\Content\ArticleTags;
use App\Content\Blocks\ArticleCards;
use App\Content\Languages;
use App\Content\Links\LinkResolver;
use App\Content\Names;
use App\Content\PublicLookup;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Locked;
use Livewire\Component;

new #[Layout('components.layouts.app')] class extends Component {
  #[Locked]
  public int $articleId = 0;

  #[Locked]
  public string $lang = 'en';

  public function mount(string $slug): void
  {
    $this->lang = Languages::forRequest();
    $locales = Languages::fromConfig()['locales'];
    $found = PublicLookup::findArticle($slug, $this->lang, $locales);
    abort_if($found === null, 404);   // tidak ada, bukan berstatus terbit, belum diterjemahkan, atau slug tidak sah

    if ($found['redirect'] !== null) {
      $to = LinkResolver::address('article', $found['redirect'], $this->lang);
      abort_if($to === null, 404);
      throw new \Illuminate\Http\Exceptions\HttpResponseException(redirect($to, 301));
    }

    $this->articleId = (int) $found['model']->id;

    $post = $found['model'];
    view()->share('title', Names::exact($post->getRawOriginal('meta_title'), $this->lang) ?: Names::exact($post->getRawOriginal('title'), $this->lang));
    view()->share('description', Names::exact($post->getRawOriginal('meta_description'), $this->lang));
    view()->share('alternates', PublicLookup::alternateUrls('article', $post, $locales));
    view()->share('currentArticleId', $this->articleId);   // blok "Artikel Terbaru" tidak menampilkan artikel yang sedang dibuka

    // rilis 47: pratinjau media sosial. og:image harus mutlak; tanpa thumbnail dibiarkan kosong supaya head.blade.php memakai gambar bawaan.
    $hero = $this->hero;
    $og = $hero !== null ? ArticleCards::absoluteUrl($hero['url'], url('/')) : null;
    view()->share('ogType', 'article');
    if ($og !== null) {
      view()->share('ogImage', $og);
      if ($hero['alt'] !== '') {
        view()->share('ogImageAlt', $hero['alt']);
      }
    }
  }

  public function hydrate(): void
  {
    app()->setLocale($this->lang);
  }

  #[Computed]
  public function post()
  {
    return \App\Models\Post::query()->findOrFail($this->articleId);
  }

  #[Computed]
  public function document(): array
  {
    return PublicLookup::document($this->post->getRawOriginal('content'), Languages::fromConfig()['locales'], true, $this->lang);
  }

  /** @return array{url:string,alt:string}|null gambar utama dari thumbnail, atau null bila belum ada / medianya sudah dihapus */
  #[Computed]
  public function hero(): ?array
  {
    return ArticleCards::hero(
      $this->post->getRawOriginal('featured_image'),
      fn (string $file) => LinkResolver::publicUrl($file, config('cms.public.cover'), config('cms.public.base') ?? '', '{file}'),
      function (int $id): ?array {
        $m = \App\Models\Media::query()->find($id);   // Media di landing memakai SoftDeletes: berkas yang dihapus di CMS tidak ikut

        return $m ? ['url' => $m->url(), 'mime' => $m->mime_type, 'alt' => $m->alt_text] : null;
      },
    );
  }

  /**
   * Tag artikel untuk bahasa halaman ini (urut abjad). `href` null = tag belum punya alamat di bahasa ini atau daftar artikel belum diatur:
   * tampil sebagai label tanpa tautan.
   *
   * @return list<array{id:int,name:string,slug:?string,href:?string}>
   */
  #[Computed]
  public function tags(): array
  {
    $out = [];
    foreach (PublicLookup::articleTags($this->articleId, $this->lang, Languages::fromConfig()['locales']) as $tag) {
      $out[] = ['id' => $tag['id'], 'name' => $tag['name'], 'slug' => $tag['slug'], 'href' => $tag['slug'] !== null ? LinkResolver::tagAddress($tag['slug'], $this->lang) : null];
    }

    return $out;
  }

  /** @return array{rows:list<array<string,mixed>>,categories:array<int,mixed>} artikel terkait; kosong bila disembunyikan atau tidak ada */
  #[Computed]
  public function related(): array
  {
    if (ArticleTags::hideRelated($this->document['settings'] ?? [])) {
      return ['rows' => [], 'categories' => []];
    }

    return PublicLookup::relatedArticles($this->articleId, $this->lang);
  }

  /** @return array{title:string,category:string,dateIso:string,dateLabel:string,byline:string,bylineLabel:string} */
  #[Computed]
  public function header(): array
  {
    $post = $this->post;
    [$iso, $label] = ArticleCards::date($post->getRawOriginal('published_at'), $this->lang);
    $category = $post->category_id ? \App\Models\Category::query()->find($post->category_id) : null;

    return [
      'title' => Names::exact($post->getRawOriginal('title'), $this->lang),
      'category' => $category ? Names::of($category->getRawOriginal('name'), $this->lang) : '',
      'dateIso' => $iso,
      'dateLabel' => $label,
      'byline' => ArticleByline::show($this->document['settings'] ?? [])
        ? ArticleByline::join(PublicLookup::authorNames($this->articleId, $post->user_id), $this->lang)
        : '',
      'bylineLabel' => ArticleByline::label($this->lang),
    ];
  }
};
?>

<article>
  {{-- rilis 53: selebar isi (max-w-7xl + gutter yang sama dengan blok), judul besar; tanggal dan penulis satu baris dengan pemisah "•" --}}
  <header class="mx-auto w-full max-w-7xl px-4 pt-12 pb-8 sm:px-6 lg:px-8 lg:pt-16">
    @if ($this->header['category'] !== '')
      <p class="font-jakarta text-xs font-bold tracking-[0.14em] text-coral uppercase sm:text-sm">{{ $this->header['category'] }}</p>
    @endif
    <h1 class="font-fraunces mt-3 text-4xl leading-[1.1] font-bold tracking-tight text-balance text-forest sm:text-5xl lg:text-6xl">{{ $this->header['title'] }}</h1>
    @if ($this->header['dateIso'] !== '' || $this->header['byline'] !== '')
      <p class="mt-5 flex flex-wrap items-center gap-x-3 gap-y-1 text-sm text-ink-soft sm:text-base" data-article-meta>
        @if ($this->header['dateIso'] !== '')
          <time datetime="{{ $this->header['dateIso'] }}">{{ $this->header['dateLabel'] }}</time>
        @endif
        @if ($this->header['dateIso'] !== '' && $this->header['byline'] !== '')
          <span aria-hidden="true">•</span>
        @endif
        @if ($this->header['byline'] !== '')
          <span data-article-byline>{{ $this->header['bylineLabel'] }} <span class="font-semibold text-forest">{{ $this->header['byline'] }}</span></span>
        @endif
      </p>
    @endif
  </header>

  {{-- rilis 56: settings.hide_hero (CMS: "Sembunyikan thumbnail di halaman artikel") menyembunyikan gambar ini saja; kartu dan og:image tetap memakainya --}}
  @if ($this->hero !== null && ! \App\Content\Blocks\ArticleCards::hideHero($this->document['settings'] ?? []))
    <figure class="mx-auto max-w-5xl px-4 pb-8">
      {{-- rilis 47: sudut tidak seragam (tidak "boxy"); rasio tetap supaya halaman tidak bergeser saat gambar dimuat; gambar pertama = prioritas --}}
      <img
        src="{{ $this->hero['url'] }}"
        alt="{{ $this->hero['alt'] }}"
        fetchpriority="high"
        decoding="async"
        class="aspect-[16/9] w-full rounded-tl-[3rem] rounded-tr-xl rounded-br-[3rem] rounded-bl-xl bg-forest/10 object-cover"
      />
    </figure>
  @endif

  <x-content.sections
    :blocks="$this->document['blocks']"
    :order="$this->document['order']"
    :settings="$this->document['settings']"
    :lang="$lang"
  />

  {{-- rilis 54: tag (tautan ke daftar yang disaring) dan artikel terkait --}}
  @if ($this->tags !== [])
    <nav class="mx-auto w-full max-w-7xl px-4 pt-2 pb-10 sm:px-6 lg:px-8" aria-label="{{ \App\Content\ArticleTags::listLabel($lang) }}" data-article-tags>
      <ul role="list" class="flex flex-wrap gap-2">
        @foreach ($this->tags as $tag)
          <li>
            @if ($tag['href'] !== null)
              <a href="{{ $tag['href'] }}" rel="tag" class="inline-flex items-center rounded-full border border-forest/25 px-3.5 py-1.5 text-sm font-semibold text-forest transition-colors hover:bg-forest/10 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-forest" data-article-tag="{{ $tag['slug'] }}">#{{ $tag['name'] }}</a>
            @else
              <span class="inline-flex items-center rounded-full border border-forest/15 px-3.5 py-1.5 text-sm font-semibold text-ink-soft" data-article-tag="">#{{ $tag['name'] }}</span>
            @endif
          </li>
        @endforeach
      </ul>
    </nav>
  @endif

  @if ($this->related['rows'] !== [])
    <div class="mx-auto w-full max-w-7xl px-4 pb-16 sm:px-6 lg:px-8" data-related-articles>
      <x-dynamic-component
        component="blocks.render.latest-articles-builder"
        :block="['id' => 'related']"
        :data="['title' => ['id' => \App\Content\ArticleTags::relatedHeading('id'), 'en' => \App\Content\ArticleTags::relatedHeading('en')], 'columns' => 3, 'show_excerpt' => false]"
        :lang="$lang"
        :feed="$this->related"
      />
    </div>
  @endif
</article>