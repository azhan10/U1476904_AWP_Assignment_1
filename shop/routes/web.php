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


Route::get('/', function () {
    return view('welcome');
});




Route::resource('FilmCRUD','FilmCRUDController');

Route::resource('adminCRUD','AdminCRUDController');

Route::resource('newFilmsCRUD','newFilmController');


Route::resource('adminNewFilms','adminNewFilmsController');



Route::get('http://localhost/shop/public/FilmCRUD/', [
  'as' => 'reviewFilm', 
  'uses' => 'Auth\FilmCRUDController@show'
]);



