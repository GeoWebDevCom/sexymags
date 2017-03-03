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

Route::get('/','ShowController@caoliu');
Route::get('/caoliu/{id}','ShowController@caoliu')->where('id','[0-9]+');
Route::get('/caoliu','ShowController@caoliu');
Route::get('/uniform/{id}','ShowController@uniform')->where('id','[0-9]+');
Route::get('/uniform','ShowController@uniform');
Route::get('/euus/{id}','ShowController@euus')->where('id','[0-9]+');
Route::get('/euus','ShowController@euus');
Route::get('/asian/{id}','ShowController@asian')->where('id','[0-9]+');
Route::get('/asian','ShowController@asian');
Route::get('/selfie/{id}','ShowController@selfie')->where('id','[0-9]+');
Route::get('/selfie','ShowController@selfie');
Route::get('/anime/{id}','ShowController@anime')->where('id','[0-9]+');
Route::get('/anime','ShowController@anime');
Route::get('/psycho/{id}','ShowController@psycho')->where('id','[0-9]+');
Route::get('/psycho','ShowController@psycho');
Route::get('/scrap/{id}','ScrappyController@index');