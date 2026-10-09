<?php

use Illuminate\Support\Facades\Route;

// Route::view('/', 'welcome')->name('home');
Route::view('/', 'pages.landing')->name('home');
// Rilis 13: /articles (placeholder) diganti indeks artikel di /artikel; alamat lama dialihkan.
Route::redirect('/articles', '/artikel', 301);
// Route::view('/sample', 'pages.claude-landing-tailwind')->name('sample');
// Route::view('/sample-v2', 'pages.claude-landing-v2')->name('samplev2');

// ---------------------------------------------------------------------------------------------------------------------
// Rilis 13: halaman dari CMS. URUTAN PENTING: rute statis di atas lebih dulu, '/{slug}' PALING AKHIR.
// Templat jalur harus sama dengan config('cms.public'): page '/{slug}', article '/artikel/{slug}' (lihat config/cms.php).
// ---------------------------------------------------------------------------------------------------------------------
// Peta situs: satu segmen tetapi bertitik, jadi bukan slug yang sah dan tidak pernah bertabrakan dengan halaman CMS.
Route::get('/sitemap.xml', \App\Http\Controllers\SitemapController::class)->name('sitemap');
Route::livewire('/artikel', 'articles-index')->name('articles');
Route::livewire('/artikel/{slug}', 'article-show')->name('article.show');
Route::livewire('/{slug}', 'page-show')->name('page.show')->where('slug', '[a-z0-9]+(?:-[a-z0-9]+)*');
