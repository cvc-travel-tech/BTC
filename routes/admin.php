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
        Route::get('/', "HomeController@index")->name('home');
        Route::resource('destination', 'DestinationController');
        Route::resource('setting', 'SettingController');
        Route::get('products/data', 'DestinationController@reposList')->name('product.data');
        Route::any('logout', 'AdminAuthController@Logout')->name('logout');
        Route::resource('Blog', 'BlogController');
        Route::post('media/store', 'MediaController@store')->name('media.store');
    });
    Route::get('media/get', 'MediaController@getImages')->name('media.getImages');
});
