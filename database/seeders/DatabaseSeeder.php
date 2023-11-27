<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\User::create([
            'name' => 'Admin',
            'email' => 'admin@id',
            'password' => bcrypt('admin'),
            'nik_pic' => '12345678',
            'group_id' => 1,
            'is_admin' => 'admin'
        ]);

        \App\Models\User::create([
            'name' => 'ayu',
            'email' => 'ayu@id',
            'password' => bcrypt('ayu'),
            'nik_pic' => '12345678',
            'group_id' => 1,
            'is_admin' => 'user'
        ]);

        \App\Models\User::factory(99)->create();


        $this->call([
            \Database\Seeders\UserSeeder::class,
            \Database\Seeders\BarangSeeder::class,
            \Database\Seeders\JenisBarangSeeder::class,
            // \Database\Seeders\GroupPageSeeder::class,
            // \Database\Seeders\GroupSeeder::class,
            // \Database\Seeders\PageSeeder::class
        ]);
    }
}
