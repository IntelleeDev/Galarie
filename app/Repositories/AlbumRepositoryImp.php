<?php
namespace App\Repositories;

use App\Album;
use App\Interfaces\AlbumRepository;

use Illuminate\Http\Request;

class AlbumRepositoryImp implements AlbumRepository
{
    public function all()
    {
        return Album::all();
    }

    public function save(Request $request)
    {
        return Album::create([
            'title' => $request->title,
            'description' => $request->description,
            'tags' => $request->tags,
            'album_cover' => $request->store_path
        ]);
    }

    public function delete($id)
    {
        Album::destroy($id);
    }
   
    public function getAlbumsByUser($id)
    {
        return Album::where('user_id', $id)->orderBy('created_at', 'desc')->get();
    }
}