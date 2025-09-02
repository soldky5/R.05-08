<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\MangaController;
use Illuminate\Support\Facades\Route;

Route::resource('authors', AuthorController::class);
Route::resource('mangas', MangaController::class);
