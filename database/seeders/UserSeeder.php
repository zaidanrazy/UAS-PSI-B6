<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::factory(30)->create();

        User::create([
            'name' => 'Arya Pradana',
            'email' => 'arya@gmail.com',
            'password' => bcrypt('12345'),
            'nik_pic' => '12345678',
            'group_id' => 1
        ]);

        User::factory(99)->create();
    }
}
