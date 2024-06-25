<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UMKMSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('umkms')->insert([
            [
                'name' => 'UMKM 1',
                'username' => 'umkm1',
                'email' => 'umkm1@example.com',
                'password' => Hash::make('password'),
                'picture' => 'umkm1.jpg',
                'address' => 'Jalan Contoh No. 1',
                'phone' => '081234567890',
                'email_verified_at' => now(),
                'status' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'UMKM 2',
                'username' => 'umkm2',
                'email' => 'umkm2@example.com',
                'password' => Hash::make('password'),
                'picture' => 'umkm2.jpg',
                'address' => 'Jalan Contoh No. 2',
                'phone' => '081234567891',
                'email_verified_at' => now(),
                'status' => 'Pending',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan data lainnya sesuai kebutuhan
        ]);
    }
}
