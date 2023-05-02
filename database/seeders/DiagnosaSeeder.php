<?php

namespace Database\Seeders;

use App\Models\Diagnosa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DiagnosaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Diagnosa::create([
            'id_jenis' => 1,
            'nama' => 'Darah Lengkap',
            'harga' => 50000,
            
        ]);
        Diagnosa::create([
            'id_jenis' => 1,
            'nama' => 'KED/LED',
            'harga' => 88000,
        ]);
        Diagnosa::create([
            'id_jenis' => 2,
            'nama' => 'Gula Darah Puasa',
            'harga' => 76000,
        ]);
        Diagnosa::create([
            'id_jenis' => 2,
            'nama' => 'Gula Darah 2 Jam PP',
            'harga' => 15000,
        ]);
        Diagnosa::create([
            'id_jenis' => 3,
            'nama' => 'Calcium',
            'harga' => 32000,
        ]);
        Diagnosa::create([
            'id_jenis' => 3,
            'nama' => 'Magnesium',
            'harga' => 23000,
        ]);
        Diagnosa::create([
            'id_jenis' => 4,
            'nama' => 'LBH',
            'harga' => 30000,
        ]);
        Diagnosa::create([
            'id_jenis' => 4,
            'nama' => 'CPKs',
            'harga' => 45000,
        ]);
    }
}
