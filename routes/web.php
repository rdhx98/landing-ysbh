<?php

use Illuminate\Support\Facades\Route;

// Route::view('/', 'welcome')->name('home');
Route::view('/', 'pages/landing')->name('home');
Route::view('/about', 'pages/about')->name('about');
Route::view('/contact', 'pages/contact')->name('contact');
