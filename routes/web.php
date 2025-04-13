<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
})->name('home');

Route::get('/comics', function () {
    return view('comicsPage');
})->name('comics');
