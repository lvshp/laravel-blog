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

Route::get('index','Home\IndexController@index');
Route::get('Home/detail','Home\IndexController@detail');
Route::get('Home/update','Home\IndexController@update');
Route::get('Home/link','Home\IndexController@link');
Route::get('Home/archives','Home\IndexController@archives');
Route::get('Home/search','Home\IndexController@search');
Route::get('Home/gustbook','Home\IndexController@gustbook');