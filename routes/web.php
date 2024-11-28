<?php

use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;


Route::get('/', [MovieController::class, 'movieList'])->name('home.index');
Route::get('/movie/add', [MovieController::class, 'addMovie'])->name('movie.add');
Route::post('/movie/store',[MovieController::class,'storeMovie'])->name('movie.store');
Route::delete('/movie/delete/{movie}', [MovieController::class, 'deleteMovie'])->name('movie.delete');

