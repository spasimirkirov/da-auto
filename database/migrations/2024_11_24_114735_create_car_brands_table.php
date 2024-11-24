<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_brands', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->softDeletes();
        });

        $this->seedData();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('car_brands');
    }

    /**
     * Seed the initial data.
     */
    private function seedData()
    {
        $brands = [
            ['name' => 'Audi', 'slug' => 'audi'],
            ['name' => 'BMW', 'slug' => 'bmw'],
            ['name' => 'Chevrolet', 'slug' => 'chevrolet'],
            ['name' => 'Ford', 'slug' => 'ford'],
            ['name' => 'Honda', 'slug' => 'honda'],
            ['name' => 'Hyundai', 'slug' => 'hyundai'],
            ['name' => 'Kia', 'slug' => 'kia'],
            ['name' => 'Lexus', 'slug' => 'lexus'],
            ['name' => 'Mazda', 'slug' => 'mazda'],
            ['name' => 'Mercedes-Benz', 'slug' => 'mercedes-benz'],
            ['name' => 'Nissan', 'slug' => 'nissan'],
            ['name' => 'Peugeot', 'slug' => 'peugeot'],
            ['name' => 'Porsche', 'slug' => 'porsche'],
            ['name' => 'Renault', 'slug' => 'renault'],
            ['name' => 'Subaru', 'slug' => 'subaru'],
            ['name' => 'Tesla', 'slug' => 'tesla'],
            ['name' => 'Toyota', 'slug' => 'toyota'],
            ['name' => 'Volkswagen', 'slug' => 'volkswagen'],
            ['name' => 'Volvo', 'slug' => 'volvo'],
        ];

        DB::table('car_brands')->insert($brands);
    }
};
