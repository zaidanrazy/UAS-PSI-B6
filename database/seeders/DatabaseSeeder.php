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
            'name' => 'Arya Pradana',
            'email' => 'arya@gmail.com',
            'password' => bcrypt('12345'),
            'nik_pic' => '12345678',
            'group_id' => 1
        ]);

        \App\Models\User::factory(99)->create();


        $this->call([
            // \Database\Seeders\UserSeeder::class,
            \Database\Seeders\BarangSeeder::class,
            \Database\Seeders\JenisBarangSeeder::class
        ]);
    }
}
