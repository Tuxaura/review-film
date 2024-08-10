<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\GenreController;

Route::get('/', function () {
    return Redirect::to('/films');
});

Route::resource('genres', GenreController::class);
Route::resource('films', FilmController::class);

Route::get('logout', function ()
{
    auth()->logout();
    Session()->flush();
    return Redirect::to('/login');
})->name('logout');

Auth::routes();
