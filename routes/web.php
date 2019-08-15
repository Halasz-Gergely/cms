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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('categories/new','CategoryController@create')->middleware('auth');
Route::get('categories', 'CategoryController@index')->middleware('auth');
Route::get('categories/{catId}/delete', 'CategoryController@destroy')->middleware('auth');
Route::get('categories/{catId}/edit', 'CategoryController@show')->middleware('auth');

Route::post('categories/store','CategoryController@store')->middleware('auth');
Route::post('categories/{catId}/update','CategoryController@update')->middleware('auth');
