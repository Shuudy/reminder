<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/albums', function () {
    return view('albums');
});

Route::get('/albums/{album}', [PhotoController::class, 'index'])->name('photos');
Route::get('/photo/{photo}', [PhotoController::class, 'show'])->name('photos.show');

Route::get('/albums/numero', function () {
    return view('photos_albums');
});
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

