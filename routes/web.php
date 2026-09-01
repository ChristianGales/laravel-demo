<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

//lab activity sample routes
Route::get('/products', function () {
    return view('products.index');
})->name('products.index');


Route::get('/categories', function (){
    return view('categories.index');
})->name('categories.index');

Route::get('about', function () {
    return view('about');
})->name('about');


