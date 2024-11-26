<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarColorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('car_colors')->upsert([
            ['id' => 1, 'name' => 'Black', 'slug' => 'black'],
            ['id' => 2, 'name' => 'White', 'slug' => 'white'],
            ['id' => 3, 'name' => 'Silver', 'slug' => 'silver'],
            ['id' => 4, 'name' => 'Gray', 'slug' => 'gray'],
            ['id' => 5, 'name' => 'Red', 'slug' => 'red'],
            ['id' => 6, 'name' => 'Blue', 'slug' => 'blue'],
            ['id' => 7, 'name' => 'Brown', 'slug' => 'brown'],
            ['id' => 8, 'name' => 'Green', 'slug' => 'green'],
            ['id' => 9, 'name' => 'Beige', 'slug' => 'beige'],
            ['id' => 10, 'name' => 'Yellow', 'slug' => 'yellow'],
            ['id' => 11, 'name' => 'Gold', 'slug' => 'gold'],
            ['id' => 12, 'name' => 'Orange', 'slug' => 'orange'],
            ['id' => 13, 'name' => 'Purple', 'slug' => 'purple'],
            ['id' => 14, 'name' => 'Pink', 'slug' => 'pink'],
        ], ['id']);
    }
}
