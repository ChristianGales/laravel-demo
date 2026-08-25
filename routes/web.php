<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

// add second page
// route name()
Route::get('/second', function () {
    return view('second');
});

Route::get('/third', function () {
    return view('third');
});

//lab activity sample
Route::get('products', function () {
    return view('products');
})->name('products');

Route::get('about', function () {
    return view('about');
})->name('about');
