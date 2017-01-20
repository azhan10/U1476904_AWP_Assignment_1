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

//The routes below is needed for my project.
//This view the welcome page
Route::get('/', function () {
    return view('welcome');
});
//The following links the view directories to the right controller file.
Route::resource('currentFilms','currentFilmsController');
Route::resource('adminFilms','adminFilmsController');
Route::resource('newFilmRequests','newFilmRequestsController');
Route::resource('adminNewFilms','adminNewFilmsController');
Route::resource('loginAdmin','loginController');
Route::resource('customerRent','customerRentController');
Route::resource('adminRents','adminRentController');
