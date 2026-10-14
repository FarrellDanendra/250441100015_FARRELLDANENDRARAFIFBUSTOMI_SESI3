<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sewa;

class SewaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         Sewa::factory(8)->create();
         Sewa::create([
             [
                'nama_penyewa' => 'Rudi',
                'tanggal_mulai' => 'Honda Beat',
                'lama_sewa' => '3',
                'total_biaya' => '240000',
            ],
             [
                'nama_penyewa' => 'Dewi',
                'tanggal_mulai' => 'Toyota Avanza',
                'lama_sewa' => '2',
                'total_biaya' => '20000',
            ],
             [
                'nama_penyewa' => 'Rudi',
                'tanggal_mulai' => 'Honda Beat',
                'lama_sewa' => '3',
                'total_biaya' => '240000',
            ],
         ]);
    }
}
