<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'App\Http\Controllers\MainController@index')->name('main');

Route::resource('products', 'App\Http\Controllers\ProductController');

Route::resource('products.carts', 'App\Http\Controllers\ProductCartController')->only(['store', 'destroy']);

Route::resource('carts', 'App\Http\Controllers\CartController')->only(['index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
