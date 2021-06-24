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

Route::get('/', function () {
    return view('welcome');
});

// comics get: mostra tutti i fumetti
Route::get('/comics','ComicController@index')->name('comics.index');

//mostra i dettagli di un solo fumetto
Route::get('/comics/{id}','ComicController@show')->name('comics.show');


//rotta che mostra il form
Route::get('/comics/create','ComicController@create')->name('comics.create');
