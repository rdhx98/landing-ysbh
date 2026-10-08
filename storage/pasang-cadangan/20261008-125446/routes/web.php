<?php

use Illuminate\Support\Facades\Route;

// Route::view('/', 'welcome')->name('home');
Route::view('/', 'pages.landing')->name('home');
Route::view('/about', 'pages.about')->name('about');
Route::view('/contact', 'pages.contact-page')->name('contact');
Route::view('/articles', 'pages.contact-page')->name('articles');
// Route::view('/sample', 'pages.claude-landing-tailwind')->name('sample');
// Route::view('/sample-v2', 'pages.claude-landing-v2')->name('samplev2');

Route::view('/programs', 'pages.programs.index')->name('programs');

Route::view('/programs/malaria',    'pages.programs.program-malaria')->name('programs-malaria');
Route::view('/programs/imunisasi',  'pages.programs.program-imunisasi')->name('programs-imunisasi');
Route::view('/programs/kia',        'pages.programs.program-kia')->name('programs-kia');
Route::view('/programs/tbc',        'pages.programs.program-tbc')->name('programs-tbc');
Route::view('/programs/hiv',        'pages.programs.program-hiv')->name('programs-hiv');

// Route::view('/programs/', 'pages.programs')->name('programs');
Route::view('/credibility', 'pages.credibility')->name('credibility');
Route::view('/transparancies', 'pages.transparancy')->name('transparancies');
Route::view('/impact', 'pages.impact')->name('impact');

