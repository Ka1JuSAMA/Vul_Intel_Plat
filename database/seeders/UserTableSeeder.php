<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            // Admin
            [
                'name' => 'Admin',
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('111'),
                'role' => 'admin',
            ],

            // User
            [
                'name' => 'User1',
                'username' => 'user1',
                'email' => 'user1@gmail.com',
                'password' => Hash::make('111'),
                'role' => 'user',
            ],
        ]);
    }
}
