<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this -> call(UserTableSeeder::class);
        \App\Models\User::factory(249)->create();
        \App\Models\AssetType::factory(486)->create();
        \App\Models\BusinessContext::factory(20)->create();
        \App\Models\Post::factory(37)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
