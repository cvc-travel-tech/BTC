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

Route::group(['prefix' => 'backend', 'as' => 'admin.'], function () {
    Config::set('auth.defines', 'admin');
    Route::get('login', 'AdminAuthController@Login');
    Route::post('login', 'AdminAuthController@doLogin')->name('dologin');
    Route::group(['middleware' => 'admin:admin'], function () {
        Route::get('/', function () {
            return view('admin.home');
        });
        Route::any('logout', 'AdminAuthController@Logout')->name('logout');
    });
});
