<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'App\Http\Controllers\MainController@index')->name('main');

Route::resource('products', 'App\Http\Controllers\ProductController');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
