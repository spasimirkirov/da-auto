<?php

namespace App\Services;

use App\Models\Car;

class CarService
{
    public static function getCarQuery()
    {
        return Car::select('id', 'name', 'model', 'price', 'created_at');
    }

    public static function getCarPagination(){
        return self::getCarQuery()->paginate(25);
    }
}
