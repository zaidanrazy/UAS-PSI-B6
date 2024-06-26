<?php

namespace App\Policies;

use App\Models\Barang;
use App\Models\User;

class BarangPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function create(User $user, Barang $barang)
    {
        return $user->id == $barang->id_barang;
    }
    public function update(User $user, Barang $barang)
    {
        return $user->id == $barang->id_barang;
    }
}
