<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::view('contact', 'contact');
Route::view('about', 'about');

Route::view('/second', 'second');
