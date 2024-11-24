<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('price', 10, 2);
            $table->unsignedBigInteger('car_brand_id')->index();
            $table->unsignedBigInteger('car_color_id')->index();
            $table->unsignedBigInteger('car_transmission_type_id')->index();
            $table->unsignedBigInteger('car_engine_type_id');
            $table->year('year');
            $table->integer('mileage')->nullable();
            $table->text('description')->nullable();
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_visible')->default(false);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('car_brand_id')->references('id')->on('car_brands')->onDelete('cascade');
            $table->foreign('car_color_id')->references('id')->on('car_colors')->onDelete('cascade');
            $table->foreign('car_transmission_type_id')->references('id')->on('car_transmission_types')->onDelete('cascade');
            $table->foreign('car_engine_type_id')->references('id')->on('car_engine_types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
