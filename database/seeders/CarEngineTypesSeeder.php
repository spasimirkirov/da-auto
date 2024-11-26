<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarEngineTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('car_engine_types')->upsert([
            ['id' => 1, 'name' => 'Diesel', 'slug' => 'diesel'],
            ['id' => 2, 'name' => 'Electric', 'slug' => 'electric'],
            ['id' => 3, 'name' => 'Gasoline', 'slug' => 'gasoline'],
            ['id' => 4, 'name' => 'Hybrid', 'slug' => 'hybrid'],
            ['id' => 5, 'name' => 'Hydrogen', 'slug' => 'hydrogen'],
            ['id' => 6, 'name' => 'Natural Gas', 'slug' => 'natural-gas'],
            ['id' => 7, 'name' => 'Plug-in Hybrid', 'slug' => 'plug-in-hybrid'],
        ], ['id']);
    }
}
