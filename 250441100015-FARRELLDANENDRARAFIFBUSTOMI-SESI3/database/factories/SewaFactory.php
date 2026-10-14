<?php

namespace Database\Factories;

use App\Models\Kendaraan;
use App\Models\Sewa;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Sewa>
 */
class SewaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'kendaraan_id' => Kendaraan::inRandomOrder()->value('id'),
            'nama_penyewa' => fake()->word(),
            'tanggal_mulai' => fake(),
            'tarif_per_hari' => fake(),
        ];
    }
}
