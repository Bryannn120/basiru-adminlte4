<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Admin::create([
        'name'=>'informatic',
        'username'=>'imformatic',
        'email'=>'informatikac@gmail.com',
        'password'=>Hash::make('12345')
       ]);
    }
}
