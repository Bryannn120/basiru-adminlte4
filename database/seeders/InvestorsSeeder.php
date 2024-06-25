<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class InvestorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('investors')->insert([
            [
                'name' => 'Investor 1',
                'username' => 'investor1',
                'email' => 'investor1@example.com',
                'password' => Hash::make('password'),
                'picture' => 'investor1.jpg',
                'address' => 'Jalan Contoh No. 1',
                'phone' => '081234567890',
                'email_verified_at' => now(),
                'status' => 'Active',
                'payment_metod' => 'Bank Transfer',
                'payment_email' => 'investor1@bank.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Investor 2',
                'username' => 'investor2',
                'email' => 'investor2@example.com',
                'password' => Hash::make('password'),
                'picture' => 'investor2.jpg',
                'address' => 'Jalan Contoh No. 2',
                'phone' => '081234567891',
                'email_verified_at' => now(),
                'status' => 'Pending',
                'payment_metod' => 'PayPal',
                'payment_email' => 'investor2@paypal.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan data lainnya sesuai kebutuhan
        ]);
    }
}
