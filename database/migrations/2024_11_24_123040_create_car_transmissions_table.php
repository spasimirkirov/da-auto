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
        Schema::create('car_transmissions', function (Blueprint $table) {
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
        Schema::dropIfExists('car_transmissions');
    }

    /**
     * Seed the initial data.
     */
    private function seedData()
    {
        $transmissions = [
            ['name' => 'Automatic', 'slug' => 'automatic'],
            ['name' => 'CVT', 'slug' => 'cvt'],
            ['name' => 'Dual Clutch', 'slug' => 'dual-clutch'],
            ['name' => 'Manual', 'slug' => 'manual'],
            ['name' => 'Semi-Automatic', 'slug' => 'semi-automatic'],
        ];

        DB::table('car_transmissions')->insert($transmissions);
    }
};
