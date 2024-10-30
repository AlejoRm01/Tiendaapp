<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/products', 'App\Http\Controllers\Api\ProductApiController@index')->name('api.product.index');
Route::post('/products', 'App\Http\Controllers\Api\ProductApiController@store')->name('api.product.store');
Route::get('/products/{id}', 'App\Http\Controllers\Api\ProductApiController@show')->name('api.product.show');
Route::put('/products/{id}', 'App\Http\Controllers\Api\ProductApiController@update')->name('api.product.update');
Route::delete('/products/{id}', 'App\Http\Controllers\Api\ProductApiController@destroy')->name('api.product.destroy');


Route::get('/brands', 'App\Http\Controllers\Api\BrandApiController@index')->name('api.brand.index');
Route::post('/brands', 'App\Http\Controllers\Api\BrandApiController@store')->name('api.brand.store');
Route::get('/brands/{id}', 'App\Http\Controllers\Api\BrandApiController@show')->name('api.brand.show');
Route::put('/brands/{id}', 'App\Http\Controllers\Api\BrandApiController@update')->name('api.brand.update');
Route::delete('/brands/{id}', 'App\Http\Controllers\Api\BrandApiController@destroy')->name('api.brand.destroy');