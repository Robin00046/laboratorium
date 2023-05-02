<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Laboratory;
use App\Models\Pasien;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\RoleSeeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Pasien::factory()->count(15)->create();
        // Laboratory::factory()->count(5)->create();

        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            JenisTesSeeder::class,
            DiagnosaSeeder::class,
        ]);
    }
}
