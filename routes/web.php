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

Route::get('/home', 'HeroiController@index')->name('home');
Route::post('/', 'HeroiController@store');
Route::delete('/{id}','HeroiController@destroy'); 
Route::get('/ganhador', 'HeroiController@ganhador');

