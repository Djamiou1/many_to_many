<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('products', 'App\Http\Controllers\ProductController@index')->name('product.products');
Route::get('product/create', 'App\Http\Controllers\ProductController@create')->name('product.create');
Route::post('product', 'App\Http\Controllers\ProductController@store')->name('product.store');
Route::get('product/{product}', 'App\Http\Controllers\ProductController@show')->name('product.show');

Route::get('/', function () {
    return view('welcome');
});
