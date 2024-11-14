<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/albums', function () {
    return view('albums');
});

Route::get('/albums/numero', function () {
    return view('photos_albums');
});