<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('landing')->with([
        'movies' => App\Models\Movie::all(),
        'actors' => App\Models\Actor::all(),
    ]);
});

/* Movies routes */

Route::get('/movies', 'App\Http\Controllers\MovieController@index')->name('movies.index');
Route::get('/movies/create', 'App\Http\Controllers\MovieController@create')->name('movies.create');
Route::get('/movies/{id}', 'App\Http\Controllers\MovieController@show')->name('movies.show');
Route::get('/movies/{id}/edit', 'App\Http\Controllers\MovieController@edit')->name('movies.edit');

Route::post('/movies/store', 'App\Http\Controllers\MovieController@store')->name('movies.store');
Route::put('/movies/{id}/edit', 'App\Http\Controllers\MovieController@update')->name('movies.update');
Route::delete('/movies/{id}/destroy', 'App\Http\Controllers\MovieController@destroy')->name('movies.destroy');

/* Actors routes */

Route::get('/actors', 'App\Http\Controllers\ActorController@index')->name('actors.index');
Route::get('/actors/create', 'App\Http\Controllers\ActorController@create')->name('actors.create');
Route::get('/actors/{id}', 'App\Http\Controllers\ActorController@show')->name('actors.show');
Route::get('/actors/{id}/edit', 'App\Http\Controllers\ActorController@edit')->name('actors.edit');

Route::post('/actors/store', 'App\Http\Controllers\ActorController@store')->name('actors.store');
Route::put('/actors/{id}/edit', 'App\Http\Controllers\ActorController@update')->name('actors.update');
Route::delete('/actors/{id}/destroy', 'App\Http\Controllers\ActorController@destroy')->name('actors.destroy');
