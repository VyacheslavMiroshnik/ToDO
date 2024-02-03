<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class GroupsPolicy
{
    use HandlesAuthorization;
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }
    public function update(User $user)
    {
        return mb_strtolower( $user->name) === 'admin';
    }
    public function delete(User $user)
    {
        return $this->update($user);
    }
    public function post(User $user)
    {
        return $this->update($user);
    }
}
