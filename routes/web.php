<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('article', 'article')->name('article');
Route::view('contact', 'contact')->name('contact');
Route::view('about', 'about')->name('about');

Route::view('/second', 'second');
