<?php

namespace App\Policies;

use App\Models\Post;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class PostPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function managePost(User $user, Post $post)
    {
        return
            auth()->check() && ($post->author_id === auth()->user()->id || auth()->user()->is_admin)
            ? Response::allow()
            : Response::deny('You dont have enough permissions to do the requested action. Please contact an admin.');
    }
}
