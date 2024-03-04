<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Shortlink;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // User::factory(5)->create();
        // Shortlink::factory(50)->create();
        User::factory(5)->hasShortlinks(10)->create();
    }
}
