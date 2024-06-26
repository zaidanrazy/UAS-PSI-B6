<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        'App\Models\Barang' => 'App\Policies\BarangPolicy',
        'App\Models\User' => 'App\Policies\UserPolicy',
        'App\Models\JenisBarang' => 'App\Policies\JenisPolicy',
        'App\Models\Peminjaman' => 'App\Policies\PengembalianPolicy',
        'App\Models\JenisBarang' => 'App\Policies\jeniss',
    ];


    /**
     * Register any authentication / authorization services.
     */
}
