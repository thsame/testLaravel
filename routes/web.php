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

Route::get('/','IndexController@index')->name('index');
ROute::get('/bbs.php','bbsController@show')->name('bbs');
//Route::resource('/bbs.php', 'bbsController@store', ['only' => ['create', 'store']]);
Route::POST('/bbs.php', 'bbsController@store');
