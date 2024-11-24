<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $name
 * @property string $slug
 * @property \Illuminate\Support\Carbon $deleted_at
 */
class CarBrand extends Model
{
    protected $table = 'car_brands';
}
