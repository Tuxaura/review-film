<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\GenreController;

Route::get('/', function () {
    return view('welcome');
});

// Genre Routes
Route::resource('genres', GenreController::class);
Route::get('genres/{genre}', [GenreController::class, 'show'])->name('genres.show');

// Film Routes
Route::resource('films', FilmController::class);
Route::get('films/{film}', [FilmController::class, 'show'])->name('films.show');


Auth::routes();





// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
