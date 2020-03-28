<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('movies', 'MovieController@index')->name('movie.index');
Route::get('movie/create', 'MovieController@create')->name('movie.create');
Route::post('movie/store', 'MovieController@store')->name('movie.store');
Route::get('movie/show/{id}', 'MovieController@show')->name('movie.show');
Route::get('movie/edit/{id}', 'MovieController@edit')->name('movie.edit');
Route::post('movie/update/{id}', 'MovieController@update')->name('movie.update');
Route::post('movie/destroy', 'MovieController@destroy')->name('movie.destroy');
