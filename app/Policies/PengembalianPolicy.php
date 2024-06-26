<?php

namespace App\Policies;

use App\Models\Peminjaman;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class PengembalianPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    // public function viewAny(User $user)
    // {
    //     //
    // }
    public function index(User $user, Peminjaman $laporan)
    {
        return $user->id == $laporan->id;
    }
}
