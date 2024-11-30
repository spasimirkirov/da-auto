<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property integer $id
 * @property string $name
 * @property float $price
 * @property integer $car_brand_id
 * @property integer $car_color_id
 * @property integer $car_transmission_type_id
 * @property integer $car_engine_type_id
 * @property \Illuminate\Support\Carbon $year
 * @property integer $mileage
 * @property string $description
 * @property boolean $is_featured
 * @property boolean $is_visible
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @property \Illuminate\Support\Carbon $deleted_at
 */

class Car extends Model
{
    /** @use HasFactory<\Database\Factories\CarFActory> */
    use HasFactory, SoftDeletes;

    protected $table = 'cars';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'price',
        'car_brand_id',
        'car_color_id',
        'car_transmission_type_id',
        'car_engine_type_id',
        'year',
        'mileage',
        'description',
        'is_featured',
        'is_visible',
    ];

    public function images()
    {
        return $this->hasMany(CarImage::class);
    }
}
