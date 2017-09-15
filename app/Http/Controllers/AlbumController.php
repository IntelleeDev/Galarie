<?php

namespace App\Http\Controllers;

use App\Album;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AlbumController extends Controller
{
    private $albumCoverDir = 'covers';

    public function index() 
    {
        $albums = Auth::user()->albums()->orderBy('created_at', 'desc')->get();

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

        $album = Album::create([
            'title' => $request->title,
            'description' => $request->description,
            'tags' => $request->tags,
            'album_cover' => $storagePath
        ]);

        Auth::user()->albums()->save($album);
        return redirect('/home');
    }

    public function delete(Album $album) 
    {
        Album::destroy($album->id);
        return redirect()->route('albums');
    } 
}
