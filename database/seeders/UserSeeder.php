<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create( [
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
            ] )->assignRole('Admin');
        User::create( [
            'name' => 'Dokter Tirta',
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
            ] )->assignRole('Dokter');
        User::create( [
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
            ] )->assignRole('Lab');
        User::create( [
            'name' => 'Dokter Manusia',
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
            ] )->assignRole('Dokter');
    }
}
