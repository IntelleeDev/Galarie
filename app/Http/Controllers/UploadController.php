<?php

namespace App\Http\Controllers;

use App\Photo;
use App\Album;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    private $photosBaseDir = 'photos';
    
    public function construct() 
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $albums = Auth::user()->albums;
        return view('dash.upload.home')->with('albums', $albums);
    }

    public function create(Album $album)
    {
        return view('dash.upload.create')->with('album', $album);
    }

    public function store(Album $album, Request $request)
    {
        $this->validate($request, [
            'photos' => 'required'
        ]);

        foreach ($request->file('photos') as $uploadedFile) {
            $photo =  new Photo;
            $photo->type =  $uploadedFile->extension();
            $path = Storage::disk('public')->putFile($this->photosBaseDir, $uploadedFile);
            $photo->store_path = $path;
            $album->photos()->save($photo);
        }

        return redirect()->route('upload_photo', ['album' => $album->id]);
    }
}
