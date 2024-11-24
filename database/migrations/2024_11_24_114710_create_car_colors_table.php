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
        Schema::create('car_colors', function (Blueprint $table) {
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
        Schema::dropIfExists('car_colors');
    }

    /**
     * Seed the initial data.
     */
    private function seedData()
    {
        $colors = [
            ['name' => 'Black', 'slug' => 'black'],
            ['name' => 'White', 'slug' => 'white'],
            ['name' => 'Silver', 'slug' => 'silver'],
            ['name' => 'Gray', 'slug' => 'gray'],
            ['name' => 'Red', 'slug' => 'red'],
            ['name' => 'Blue', 'slug' => 'blue'],
            ['name' => 'Brown', 'slug' => 'brown'],
            ['name' => 'Green', 'slug' => 'green'],
            ['name' => 'Beige', 'slug' => 'beige'],
            ['name' => 'Yellow', 'slug' => 'yellow'],
            ['name' => 'Gold', 'slug' => 'gold'],
            ['name' => 'Orange', 'slug' => 'orange'],
            ['name' => 'Purple', 'slug' => 'purple'],
            ['name' => 'Pink', 'slug' => 'pink'],
        ];

        DB::table('car_colors')->insert($colors);
    }
};
