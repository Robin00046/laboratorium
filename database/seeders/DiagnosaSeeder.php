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
            'keterangan' => 'Keterangan 1',
        ]);
        Diagnosa::create([
            'id_jenis' => 1,
            'nama' => 'KED/LED',
            'keterangan' => 'Keterangan 2',
        ]);
        Diagnosa::create([
            'id_jenis' => 2,
            'nama' => 'Gula Darah Puasa',
            'keterangan' => 'Keterangan 2',
        ]);
        Diagnosa::create([
            'id_jenis' => 2,
            'nama' => 'Gula Darah 2 Jam PP',
            'keterangan' => 'Keterangan 2',
        ]);
        Diagnosa::create([
            'id_jenis' => 3,
            'nama' => 'Calcium',
            'keterangan' => 'Keterangan 3',
        ]);
        Diagnosa::create([
            'id_jenis' => 3,
            'nama' => 'Magnesium',
            'keterangan' => 'Keterangan 3',
        ]);
        Diagnosa::create([
            'id_jenis' => 4,
            'nama' => 'LBH',
            'keterangan' => 'Keterangan 4',
        ]);
        Diagnosa::create([
            'id_jenis' => 4,
            'nama' => 'CPKs',
            'keterangan' => 'Keterangan 4',
        ]);
    }
}
