<?php

namespace Database\Seeders;

use App\Models\Chirp;
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
        $users = User::factory(5)->create();

        foreach ($users as $user) {
            Chirp::factory(10)->create([
                'user_id' => $user->id,
                'created_at' => now()->subMinutes(rand(1, 1440))
            ]);
        }
    }
}
