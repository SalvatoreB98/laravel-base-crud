<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'homeController@index')->name('home');

Route::get('comic/create', 'comicController@create')->name('comic.create');

Route::post('comic/store', 'comicController@store')->name('comic.store');

Route::get('comic/{id}', 'comicController@show')->name('comic.show');

Route::get('comic/{id}/edit', 'comicController@edit')->name('comic.edit');

Route::match(["PUT", "PATCH"], "/comic/update/{id}", "comicController@update")->name("comic.update");

Route::delete('/comic/{id}/delete', 'comicController@destroy')->name("comic.destroy");

