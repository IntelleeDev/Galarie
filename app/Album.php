<?php

namespace App;

use App\User;
use App\Photo;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{    
    protected $fillable = ['title', 'description', 'tags', 'album_cover']; 

    public function user() 
    {
        return $this->belongsTo(User::class);
    }

    public function photos() 
    {
        return $this->hasMany(Photo::class);
    }

    public function totalPhotos()
    {
        return $this->photos()->count();
    }
}
