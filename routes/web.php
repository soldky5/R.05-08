<?php

use App\Models\Author;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $authors = Author::orderBy('name', 'asc')->get();
    return view('welcome', compact('authors'));
})->name('home');
