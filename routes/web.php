<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

// Product Routes / Now using ProductController
Route::get('/products', function () {
    return view('products.index');
})->name('products.index');

Route::get('/products/create', function () {
    return view('products.add-product');
})->name('products.create');

Route::get('/products/edit', function () {
    return view('products.edit-product');
})->name('products.edit');

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::get('/products/edit', [ProductController::class, 'edit'])->name('products.edit');





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


