<?php

namespace Database\Seeders;

use App\Models\Kendaraan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KendaraanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kendaraan::factory(10)->create();
        // Kendaraan::create([
        //     [
        //         'plat_nomor' => 'M 1234 AB',
        //         'merek' => 'Toyota Avanza',
        //         'tarif_per_hari' => '350000',
        //     ],
        //     [
        //         'plat_nomor' => 'M 5678 CD',
        //         'merek' => 'Honda Brio',
        //         'tarif_per_hari' => '300000',
        //     ],
        //     [
        //         'plat_nomor' => 'M 2468 EF',
        //         'merek' => 'Honda Beat',
        //         'tarif_per_hari' => '80000',
        //     ],
        //     [
        //         'plat_nomor' => 'M 1357 GH',
        //         'merek' => 'Yamaha NMAX',
        //         'tarif_per_hari' => '120000',
        //     ],

        // ]);
    }
}
