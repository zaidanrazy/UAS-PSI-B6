<?php

namespace App\Policies;

use App\Models\Peminjaman;
use App\Models\User;
use App\Models\JenisBarang;
use Illuminate\Auth\Access\Response;

class jeniss
{
    /**
     * Determine whether the user can view any models.
     */
    public function index(User $user, JenisBarang $JenisBarang)
    {
        return $user->id == $JenisBarang->id_jb;
    }
}
