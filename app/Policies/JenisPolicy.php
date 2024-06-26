<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Peminjaman;
use App\Models\JenisBarang;




class JenisPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }


    // public function create(User $user, JenisBarang $jenisBarang)
    // {
    //     return $user->id == $jenisBarang->id_jb;
    // }
    public function index(User $user, Peminjaman $pinjam)
    {
        return $user->id == $pinjam->id;
    }
    // public function index(User $user, Peminjaman $pengembalian)
    // {
    //     return $user->id == $pengembalian->id;
    // }
}
