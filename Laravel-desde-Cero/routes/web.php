<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\MainController@index')->name('main');

Route::get('products', 'App\Http\Controllers\ProductController@index')->name('products.index');

Route::get('products/create', 'App\Http\Controllers\ProductController@create')->name('products.create');

Route::post('products', 'App\Http\Controllers\ProductController@store')->name('products.store');

Route::get('products/{product}', 'App\Http\Controllers\ProductController@show')->name('products.show');

Route::get('products/{product}/edit', 'App\Http\Controllers\ProductController@edit')->name('products.edit');

Route::match(['put', 'patch'], 'products/{product}', 'App\Http\Controllers\ProductController@update')->name('products.update');

Route::delete('products/{product}', 'App\Http\Controllers\ProductController@destroy')->name('products.destroy');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
