<?php

namespace App\Policies;

use App\User;
use App\Album;

use Illuminate\Auth\Access\HandlesAuthorization;

class AlbumPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    public function delete(User $user, Album $album)
    {
        return $user->id === $album->user_id;
    }
}
