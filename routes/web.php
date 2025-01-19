<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/main', 'App\Http\Controllers\IndexController');

Route::get('/products', 'App\Http\Controllers\ProductController');

Route::get('/products/{product}','App\Http\Controllers\ShowController')->name('product.show');
