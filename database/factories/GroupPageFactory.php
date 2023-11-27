<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\GroupPage>
 */
class GroupPageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'group_id' => mt_rand(1, 5),
            'page_id' => mt_rand(1, 25),
            'access' => mt_rand(0, 1),
        ];
    }
}
