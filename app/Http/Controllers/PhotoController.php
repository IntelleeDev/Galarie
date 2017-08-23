<?php

namespace App\Http\Controllers;

use App\Album;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function construct() 
    {
        $this->middleware('auth');
    }

    public function index(Album $album) 
    {
        $photos = $album->photos;
        return view('dash.photo.home')->with(['photos' => $photos, 'album' => $album ]);
    }
}
