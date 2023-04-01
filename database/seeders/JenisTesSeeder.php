<?php

namespace Database\Seeders;

use App\Models\Jenis_Tes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JenisTesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Jenis_Tes::create([
            'id' => 1,
            'nama' => 'Hematologi',
            'keterangan' => 'Keterangan 1',
        ]);
        Jenis_Tes::create([
            'id' => 2,
           'nama' => 'Glukosa',
              'keterangan' => 'Keterangan 2',
        ]);
        Jenis_Tes::create([
            'id' => 3,
            'nama' => 'Elektrolit & Gas Darah',
            'keterangan' => 'Keterangan 3',
        ]);
        Jenis_Tes::create([
            'id' => 4,
            'nama' => 'Faal Jantung',
            'keterangan' => 'Keterangan 4',
        ]);

    }
}
