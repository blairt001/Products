<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products/create', 'ProductController@create');
Route::get('/allproducts', 'ProductController@products');
Route::get('/products/edit/{id}', 'ProductController@edit');
Route::get('/products/delete/{id}', 'ProductController@delete');
Route::post('/products/store', 'ProductController@store');
Route::get('/products/about', 'ProductController@about');
Route::patch('/products/update/{id}', 'ProductController@update');