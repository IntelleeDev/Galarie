<?php
namespace App\Interfaces;

use Illuminate\Http\Request;

interface AlbumRepository
{
    public function all();

    public function delete($id);
    
    public function getAlbumsByUser($id);

    public function save(Request $request);
}