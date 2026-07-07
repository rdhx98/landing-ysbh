<?php

use Illuminate\Support\Facades\Route;

// Route::view('/', 'welcome')->name('home');
Route::view('/', 'pages/landing')->name('home');
Route::view('/about', 'pages/about')->name('about');
Route::view('/contact', 'pages/contact')->name('contact');
Route::view('/programs', 'pages/contact')->name('programs');
Route::view('/articles', 'pages/contact')->name('articles');
Route::view('/sample', 'pages/claude-landing-tailwind')->name('sample');
Route::view('/sample-v2', 'pages/claude-landing-v2')->name('samplev2');
