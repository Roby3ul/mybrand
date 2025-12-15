<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin MyBrand',
            'email' => 'admin@mybrand.com',
            'role' => 'admin',
            'password' => Hash::make('pass1807'),
            'email_verified_at' => now(),
        ]);
    }
}
