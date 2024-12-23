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
})->name('landing');

Route::resource('movies', 'App\Http\Controllers\MovieController');
Route::resource('actors', 'App\Http\Controllers\ActorController');
