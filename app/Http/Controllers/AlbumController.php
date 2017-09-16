<?php

namespace App\Http\Controllers;

use App\Album;
use App\Interfaces\AlbumRepository;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AlbumController extends Controller
{
    private $repository;
    
    private $albumCoverDir = 'covers';

    public function __construct(AlbumRepository $repository) 
    {
        $this->middleware('auth');
        $this->repository = $repository;
    }

    public function index() 
    {
        $albums = $this->repository->getAlbumsByUser(Auth::user()->id);
        return view('dash.album.home')->with('albums', $albums);
    }

    public function create()
    {
        return view('dash.album.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:60',
            'description' => 'required|max:255',
            'tags' => 'required|max:255',
            'album_cover' => 'required'
        ]);

        $storagePath = Storage::disk('public')->putFile($this->albumCoverDir, $request->file('album_cover'));
        $request->merge(['store_path' => $storagePath]);

        $album = $this->repository->save($request);
        Auth::user()->albums()->save($album);

        return redirect('/home');
    }

    public function delete(Album $album) 
    {
        $this->authorize('delete', $album);
        
        $this->repository->delete($album->id);
        return redirect()->route('albums');
    } 
}
