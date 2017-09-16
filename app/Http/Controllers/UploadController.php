<?php

namespace App\Http\Controllers;

use App\Photo;
use App\Album;
use App\Interfaces\AlbumRepository;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    private $photosBaseDir = 'photos';
    
    public function __construct() 
    {
        $this->middleware('auth');
    }

    public function index(AlbumRepository $albumRepository)
    {
        $albums = $albumRepository->getAlbumsByUser(Auth::user()->id);
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

        return redirect()->route('upload', ['album' => $album->id]);
    }
}
