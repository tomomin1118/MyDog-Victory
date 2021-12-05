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

// マイプロフィールページを表示
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::get('dogs/create', 'Admin\DogsController@add');
    Route::post('dogs/create', 'Admin\DogsController@create');
    //公開
    Route::get('dogs/open', 'Admin\DogsController@open');
    //ユーザー登録
    Route::get('dogs/owner', 'Admin\DogsController@owner');
    Route::post('dogs/owner', 'Admin\DogsController@owner');
    
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
