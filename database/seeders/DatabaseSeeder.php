<?php

namespace Database\Seeders;

use App\Models\Car;
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
        $this->call([
            UserSeeder::class,
            CarBrandsSeeder::class,
            CarColorsSeeder::class,
            CarEngineTypesSeeder::class,
            CarTransmissionTypesSeeder::class,
            SettingTypesSeeder::class
        ]);

        // Make some fake data for testing purposes
        User::factory(30)->create(); // Seed 10 users
        Car::factory(50)->create(); // Seed 50 posts
    }
}
