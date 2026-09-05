<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

// Product Routes
Route::get('/products', function () {
    return view('products.index');
})->name('products.index');

Route::get('/products/create', function () {
    return view('products.add-product');
})->name('products.create');

Route::get('/products/edit', function () {
    return view('products.edit-product');
})->name('products.edit');


// Category Routes
Route::get('/categories', function (){
    return view('categories.index');
})->name('categories.index');

Route::get('/categories/create', function (){
    return view('categories.add-category');
})->name('categories.create');

Route::get('/categories/edit', function (){
    return view('categories.edit-category');
})->name('categories.edit');

Route::get('about', function () {
    return view('about');
})->name('about');


