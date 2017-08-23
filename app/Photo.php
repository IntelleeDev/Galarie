<?php

namespace App;

use App\Model;
use App\Album;

class Photo extends Model
{
    public function album()
    {
        return $this->belongsTo(Album::class);
    }
}
