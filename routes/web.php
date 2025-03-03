<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    $categories = DB::table('categories')->get();
    return view('home', ['categories' => $categories]);
})->name('home');

Route::view('article', 'article')->name('article');
Route::view('contact', 'contact')->name('contact');
Route::view('about', 'about')->name('about');

Route::view('/second', 'second');
