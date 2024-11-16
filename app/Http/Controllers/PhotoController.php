<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function index(Album $album) 
    {
        return view('photos_albums', compact('album'));
    }

    public function show(Photo $photo)
    {
        return view('photo', compact('photo'));
    }
}
