<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB; // Tambahkan ini untuk mengimport DB facade
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'username' => 'admin3',
                'email' => 'admin1@example.com',
                'password' => Hash::make('password'),
                'role' => 'admin',
                'full_name' => 'Admin One',
                'gender' => 'male',
                'alamat' => 'Admin Address 1',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'umkm3',
                'email' => 'umkm1@example.com',
                'password' => Hash::make('password'),
                'role' => 'umkm',
                'full_name' => 'Umkm One',
                'gender' => 'female',
                'alamat' => 'Umkm Address 1',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'investor3',
                'email' => 'investor1@example.com',
                'password' => Hash::make('password'),
                'role' => 'investor',
                'full_name' => 'Investor One',
                'gender' => 'male',
                'alamat' => 'Investor Address 1',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
