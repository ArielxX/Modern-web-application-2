<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function editUser(User $user, User $userToEdit)
    {
        return
            auth()->check() && ($userToEdit->id === auth()->user()->id || auth()->user()->is_admin)
            ? Response::allow()
            : Response::deny('You dont have enough permissions to edit this user. Please contact an admin.');
    }

    public function removeUser(User $user)
    {
        return
            auth()->check() && auth()->user()->is_admin
            ? Response::allow()
            : Response::deny('You dont have enough permissions to remove this user. Please contact an admin.');
    }
}
