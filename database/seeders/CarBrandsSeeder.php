<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarBrandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('car_brands')->upsert([
            ['id' => 1, 'name' => 'Audi', 'slug' => 'audi'],
            ['id' => 2, 'name' => 'BMW', 'slug' => 'bmw'],
            ['id' => 2, 'name' => 'Chevrolet', 'slug' => 'chevrolet'],
            ['id' => 3, 'name' => 'Ford', 'slug' => 'ford'],
            ['id' => 4, 'name' => 'Honda', 'slug' => 'honda'],
            ['id' => 5, 'name' => 'Hyundai', 'slug' => 'hyundai'],
            ['id' => 6, 'name' => 'Kia', 'slug' => 'kia'],
            ['id' => 7, 'name' => 'Lexus', 'slug' => 'lexus'],
            ['id' => 8, 'name' => 'Mazda', 'slug' => 'mazda'],
            ['id' => 9, 'name' => 'Mercedes-Benz', 'slug' => 'mercedes-benz'],
            ['id' => 10, 'name' => 'Nissan', 'slug' => 'nissan'],
            ['id' => 11, 'name' => 'Peugeot', 'slug' => 'peugeot'],
            ['id' => 12, 'name' => 'Porsche', 'slug' => 'porsche'],
            ['id' => 13, 'name' => 'Renault', 'slug' => 'renault'],
            ['id' => 14, 'name' => 'Subaru', 'slug' => 'subaru'],
            ['id' => 15, 'name' => 'Tesla', 'slug' => 'tesla'],
            ['id' => 16, 'name' => 'Toyota', 'slug' => 'toyota'],
            ['id' => 17, 'name' => 'Volkswagen', 'slug' => 'volkswagen'],
            ['id' => 18, 'name' => 'Volvo', 'slug' => 'volvo'],
        ], ['id']);
    }
}
