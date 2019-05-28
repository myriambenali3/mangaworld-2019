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

Route::get('/listerMangas', 'MangaController@getMangas');

Route::get('/ajouter-genre', 'GenreController@ajoutGenre');

Route::post('/ajouter-genre', 'GenreController@postAjoutGenre');
