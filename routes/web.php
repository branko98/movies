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

Route::get('/movies', ['uses' => 'MovieController@index']);


Route::get('/movies/create', ['uses' => 'MovieController@create']);
Route::get('/movies/{moviesid}', ['uses' => 'MovieController@show']);