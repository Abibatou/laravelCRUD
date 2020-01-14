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
Route::get('create','GameController@create');
    
Route::get('index', 'GameController@index');
Route::post('games', 'GameController@store');
Route::get('edit/{id}', 'GameController@edit')->name('games.edit');
Route::get('games', 'GameController@update');
Route::delete('delete/{id}', 'GameController@destroy')->name('games.delete');
Route::put('update/{id}', 'GameController@update')->name('games.update');



