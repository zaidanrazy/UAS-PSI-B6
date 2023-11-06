<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Barang>
 */
class BarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'barcode' => fake()->randomNumber(8),
            'barang' => fake()->randomElement(["Televisi", "Laptop", "Smartphone", "Kamera digital", "Tablet", "Microwave", "Oven", "Kulkas", "AC (Air Conditioner)", "Mesin cuci", "Blender", "Speaker Bluetooth", "Pengisi daya (charger)", "Alat pemotong rumput listrik", "Mesin pemanggang roti", "Iron (Setrika)", "Kipas angin", "Speaker komputer", "Perangkat router Wi-Fi", "Monitor komputer", "Printer", "Scanner", "Mouse komputer", "Keyboard", "Ponsel pintar (smartphone)", "Game console (konsol permainan)", "Headset", "Earphone", "Kalkulator", "Jam digital", "Jam tangan pintar (smartwatch)", "Gitar listrik", "Amplifier gitar", "Radio", "CD player", "DVD player", "Speaker karaoke", "Mixer audio", "Proyektor", "Speaker soundbar", "MP3 player", "Pen drive (USB flash drive)", "Power bank", "Keyboard elektronik (synthesizer)", "Drum elektronik", "Ear thermometer (termometer telinga)", "Teleskop", "Kipas angin meja", "Hair dryer (pengering rambut)", "Electric toothbrush (sikat gigi elektrik)", "Vacuum cleaner (penyedot debu)", "Drones", "Webcam", "Walkie-talkie", "Penghisap udara (air purifier)", "Perangkat GPS", "Treadmill elektrik", "Blood pressure monitor (alat pengukur tekanan darah)", "Water heater (pemanas air)", "Electronic scale (timbangan elektronik)", "Blender", "Espresso machine (mesin pembuat kopi)", "Rice cooker (penanak nasi)", "Food processor (alat penggiling makanan)", "Electric kettle (teko listrik)", "Game controller (kontroler permainan)", "Electronic lock (kunci elektronik)", "Electric shaver (cukur listrik)", "Digital voice recorder (perekam suara digital)", "E-book reader (pembaca buku elektronik)", "Electronic thermostat (termostat elektronik)", "Electronic insect repellent (pengusir serangga elektronik)", "Digital photo frame (bingkai foto digital)", "Air fryer", "Toaster", "Electric fan heater (pemanas kipas angin)", "Food dehydrator (pengering makanan)", "Video game console (konsol permainan video)", "Cordless phone (telepon nirkabel)", "Smart doorbell (lonceng pintu pintar)", "Video doorbell (lonceng pintu video)", "Electronic dartboard (papan darts elektronik)", "Electronic chess set (set catur elektronik)", "Handheld game console (konsol permainan genggam)", "GPS watch (jam tangan GPS)", "Electric keyboard (keyboard elektronik)", "Portable DVD player (pemain DVD portabel)", "Electric grill (grill listrik)", "Electric wok (wajan listrik)", "Electric skateboards (skateboard listrik)", "Electric scooters (skuter listrik)", "Electronic binoculars (binokular listrik)", "Electric TV (televisi listrik)", "Electric computer (komputer listrik)", "Electric phone (telepon listrik)", "Electric watch (jam tangan listrik)", "Electric clock (jam listrik)", "Electric refrigerator (kulkas listrik)", "Electric air conditioner (AC listrik)"]),
            'harga' => fake()->numerify('#.###.###'),
            'jumlah' => mt_rand(1, 100),
            'tersedia' => fake()->randomElement(['tersedia', 'terpinjam', 'kosong']),
            'terpinjam' => fake()->randomElement(['yes', 'no']),
            'id_pic' => mt_rand(1, 100),
            'id_jb' => mt_rand(1, 2),
            // 'jenis_barang' => fake()->randomElement(['Elektronik', 'Utilities'])
        ];
    }
}
