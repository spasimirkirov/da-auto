<?php

namespace Database\Factories;

use App\Models\CarBrand;
use App\Models\CarColor;
use App\Models\CarEngineType;
use App\Models\CarTransmissionType;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Auth;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * @var int
     */
    private int $counter = 1;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => 'Fake Car' . '-' . $this->counter++,
            'price' => fake()->randomFloat(2, 10, 999),
            'car_brand_id' => CarBrand::inRandomOrder()->value('id'),
            'car_color_id' => CarColor::inRandomOrder()->value('id'),
            'car_transmission_type_id' => CarTransmissionType::inRandomOrder()->value('id'),
            'car_engine_type_id' => CarEngineType::inRandomOrder()->value('id'),
            'year' => fake()->numberBetween(1989, now()->year),
            'mileage' => fake()->numberBetween(100000, 999999),
            'description' => fake()->realTextBetween(),
            'is_featured' => fake()->boolean(),
            'is_visible' => fake()->boolean(),
            'created_by' => Auth::id(),
        ];
    }
}
