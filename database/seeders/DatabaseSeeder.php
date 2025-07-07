<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UsiaSeeder::class,
            MotorikSeeder::class,
            UserSeeder::class,
            AnakSeeder::class,
            IndikatorSeeder::class,
            RekomendasiSeeder::class,
        ]);
    }
}
