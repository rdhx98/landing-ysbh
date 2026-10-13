<?php

namespace App\Http\Controllers;

use App\Content\Languages;
use App\Content\Links\LinkResolver;
use App\Content\PublicLookup;
use Illuminate\Http\RedirectResponse;

/**
 * Alamat kategori LAMA (rilis 42): GET /articles/category/{slug} (rute 'articles.category') dan /id/artikel/kategori/{slug} ('id.articles.category').
 * Rilis 52: halaman kategori tidak ada lagi; yang ada daftar artikel yang disaring, "/articles?category={slug}". Alamat lama dialihkan 301 ke sana
 * supaya tautan yang sudah beredar dan menu lama tetap bekerja. Aturan slug sama dengan dulu: slug kategori bahasa alamat dipakai langsung,
 * slug bahasa lain dialihkan ke slug bahasa alamat (satu loncatan), kategori yang tidak ada atau belum punya slug di bahasa alamat = 404.
 */
final class CategoryRedirectController
{
    public function __invoke(string $slug): RedirectResponse
    {
        $lang = Languages::forRequest();
        $found = PublicLookup::findCategory($slug, $lang, Languages::fromConfig()['locales']);
        abort_if($found === null, 404);
        $to = LinkResolver::categoryAddress($found['slug'], $lang);
        abort_if($to === null, 404);

        return redirect($to, 301);
    }
}
