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
    return view('index');
});
Route::get('/add-product','ProductController@create');
Route::get('/all-product','ProductController@show');
Route::get('/edit-product/{id}','ProductController@editProduct');
Route::get('/delete-product/{id}','ProductController@deleteProduct');
Route::post('/save-product','ProductController@save_product');


