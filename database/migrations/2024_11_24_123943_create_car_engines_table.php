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
        Schema::create('car_engine_types', function (Blueprint $table) {
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
        Schema::dropIfExists('car_engine_types');
    }

    /**
     * Seed the initial data.
     */
    private function seedData()
    {
        $engines = [
            ['name' => 'Diesel', 'slug' => 'diesel'],
            ['name' => 'Electric', 'slug' => 'electric'],
            ['name' => 'Gasoline', 'slug' => 'gasoline'],
            ['name' => 'Hybrid', 'slug' => 'hybrid'],
            ['name' => 'Hydrogen', 'slug' => 'hydrogen'],
            ['name' => 'Natural Gas', 'slug' => 'natural-gas'],
            ['name' => 'Plug-in Hybrid', 'slug' => 'plug-in-hybrid'],
        ];

        DB::table('car_engine_types')->insert($engines);
    }
};
