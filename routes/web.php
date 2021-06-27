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

//rotta che mostra il form
Route::get('/comics/create','ComicController@create')->name('comics.create');

//salva i dati ricevuti creando un nuovo fumetto
Route::post('/comics', 'ComicController@store')->name('comics.store');

//mostra i dettagli di un solo fumetto
Route::get('/comics/{comic}','ComicController@show')->name('comics.show');

//salva i dati inseriti nel form 'modifica'
Route::match(["PUT", "PATCH"], "/comics/{comic}", "ComicController@update")->name('comics.update');

//mostra il form per modificare un fumetto
Route::get('/comics/{comic}/edit','ComicController@edit')->name('comics.edit');


