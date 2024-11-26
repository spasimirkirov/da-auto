<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarTransmissionTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('car_transmission_types')->upsert([
            ['id' => 1, 'name' => 'Automatic', 'slug' => 'automatic'],
            ['id' => 2, 'name' => 'CVT', 'slug' => 'cvt'],
            ['id' => 3, 'name' => 'Dual Clutch', 'slug' => 'dual-clutch'],
            ['id' => 4, 'name' => 'Manual', 'slug' => 'manual'],
            ['id' => 5, 'name' => 'Semi-Automatic', 'slug' => 'semi-automatic'],
        ], ['id']);
    }
}
