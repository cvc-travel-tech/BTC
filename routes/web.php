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

Route::get('/', 'FrontendController@index');
Route::get('/about', 'FrontendController@about');
Route::get('/blog', 'FrontendController@blog');


Route::get('/travel-free', 'FrontendController@travel_free');
Route::get('/family-package', 'FrontendController@family_package');
Route::get('/contact', 'FrontendController@contact');

Route::get('/logiin', 'FrontendController@logiin');



Route::get('example', ['example' => 'exampl@index', 'as' => 'exampl.index']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
