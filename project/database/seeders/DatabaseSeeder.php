<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'admin',
            'username' => 'admin',
            'MobileNumber' => 5689784592,
            'Address' => 'H-911, Vihar Soraj Nagar New Delhi-110011',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('Test@123'),
        ]);
    }
}
