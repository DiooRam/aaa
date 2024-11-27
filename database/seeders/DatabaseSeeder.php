<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Tambahkan pengguna baru dengan informasi Admin User
        User::create([
            'name' => 'Admin User',
            'email' => 'dioramadhan9@gmail.com',
            'password' => bcrypt('12345678'), // Pastikan password dienkripsi
        ]);

        // Contoh data tambahan
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
