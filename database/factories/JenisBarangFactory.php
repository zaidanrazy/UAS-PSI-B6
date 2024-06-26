<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JenisBarang>
 */
class JenisBarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'jenis_barang' => function () {
                $jenisBarangList = [
                    "Elektronik & Komputer", "Alat Kontruksi & Pemeliharaan",
                    "Perlengkapan Kantor", "Perlengkapan Keamanan & Keselamatan", "Perlengkapan Umum"
                ];

                return fake()->unique()->randomElement($jenisBarangList);
            },
        ];
    }
}
