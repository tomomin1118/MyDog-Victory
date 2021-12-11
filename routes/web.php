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

//MyDog
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    //登録
    Route::get('dogs/create', 'Admin\DogsController@add');
    Route::post('dogs/create', 'Admin\DogsController@create');
    //公開
    Route::get('dogs/open', 'Admin\DogsController@open');
    Route::post('dogs/open', 'Admin\DogsController@open');
});

//ユーザー
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    //ユーザー登録
    Route::get('dogs/newowner', 'Admin\OwnerController@newowner');
    Route::post('dogs/newowner', 'Admin\OwnerController@createowner');
    //ユーザー表示
    Route::get('dogs/owner', 'Admin\OwnerController@owner');
    //ユーザー更新
    Route::post('dogs/editowner', 'Admin\OwnerController@editowner');
});
    


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
