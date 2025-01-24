<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::create([
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'mobile' => 9526242237,
            'password' => Hash::make('password123'), // Use bcrypt for hashing passwords
        ]);

        User::create([
            'name' => 'Jane Smith',
            'email' => 'janesmith@example.com',
            'mobile' => 1231231231,
            'password' => Hash::make('securepassword'),
        ]);
    }
}
