<?php

use Illuminate\Support\Facades\Route;

// Route::view('/', 'welcome')->name('home');
Route::view('/', 'pages/landing')->name('home');
Route::view('/about', 'pages/about')->name('about');
Route::view('/contact', 'pages/contact-page')->name('contact');
Route::view('/programs', 'pages/contact-page')->name('programs');
Route::view('/articles', 'pages/contact-page')->name('articles');
Route::view('/sample', 'pages/claude-landing-tailwind')->name('sample');
Route::view('/sample-v2', 'pages/claude-landing-v2')->name('samplev2');
