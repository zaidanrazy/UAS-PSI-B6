<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Barang;

class UserPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function create(User $user)
    {
        return $user->id;
    }
    public function index(User $user)
    {
        return $user->id;
    }
    public function update(User $user)
    {
        return $user->id;
    }
}
