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

Route::get('example', ['example'=>'exampl@index', 'as'=>'exampl.index']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('products-datatable', 'ProductController@datatable')->name('product.datatable');
Route::get('products-data', 'ProductController@productsList')->name('product.data');