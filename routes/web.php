<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::get('/', 'GamesController@index')->name('home');

Route::get('create', 'GamesController@create')->name('games.create');
Route::post('create', 'GamesController@store')->name('games.store');

Route::get('{id}/edit', 'GamesController@edit')->name('games.edit');
Route::post('{id}/edit', 'GamesController@update')->name('games.update');

Route::get('game/{id}', 'GamesController@show')->name('games.show');

Route::delete('delete/{id}', 'GamesController@destroy')->name('games.destroy');