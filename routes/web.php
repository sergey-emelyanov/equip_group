<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/main', 'App\Http\Controllers\IndexController')->name('group.index');

Route::get('/products', 'App\Http\Controllers\ProductController')->name('products.index');

Route::get('/products/{product}','App\Http\Controllers\ShowController')->name('product.show');
