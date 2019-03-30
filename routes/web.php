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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', 'PagesController@index');//after @ it is the functin name in the controller--check
Route::get('/about', 'PagesController@about');//after @ about is the functin name in the controller--check
Route::get('/services', 'PagesController@services');