<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/albums', function () {
    return view('albums');
});

Route::get('/albums/{album}', [PhotoController::class, 'index'])->name('photos');
Route::get('/photo/{photo}', [PhotoController::class, 'show'])->name('photos.show');