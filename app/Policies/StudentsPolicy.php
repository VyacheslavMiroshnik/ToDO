<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class StudentsPolicy
{
    use HandlesAuthorization;
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }
    public function update(User $user):bool
    {
        return mb_strtolower( $user->name) === 'admin';
    }
    public function delete(User $user):bool
    {
        return $this->update($user);
    }
    public function post(User $user):bool
    {
        return $this->update($user);
    }
}
