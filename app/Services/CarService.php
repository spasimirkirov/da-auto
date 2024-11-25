<?php

namespace App\Services;

use App\Models\Car;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Pagination\LengthAwarePaginator;

class CarService
{
    /**
     * @return Builder
     */
    public static function getCarQuery(): Builder
    {
        return Car::join('car_brands as cb', 'cb.id', 'cars.car_brand_id')
            ->join('car_colors as cc', 'cc.id', 'cars.car_color_id')
            ->join('car_transmission_types as ctt', 'ctt.id', 'cars.car_transmission_type_id')
            ->join('car_engine_types as cet', 'cet.id', 'cars.car_engine_type_id')
            ->groupBy('cars.id')
            ->orderBy('cars.id', 'desc')
            ->select(
                'cars.id',
                'cars.name',
                'cars.price',
                'cars.year',
                'cars.mileage',
                'cars.is_featured',
                'cars.is_visible',
                'cars.description',
                'cars.created_at',
                'cb.id as car_brand_id',
                'cb.name as car_brand_name',
                'cc.id as car_color_id',
                'cc.name as car_color_name',
                'ctt.id as car_transmission_type_id',
                'ctt.name as car_transmission_type_name',
                'cet.id as car_engine_type_id',
                'cet.name as car_engine_type_name',
            );
    }

    /**
     * @return LengthAwarePaginator
     */
    public static function getCarPagination(): LengthAwarePaginator
    {
        return self::getCarQuery()
            ->paginate(25);
    }

    /**
     * @param int $id
     *
     * @return Car
     */
    public static function getCarData(int $id): Car
    {
        return self::getCarQuery()
            ->where('cars.id', '=', $id)
            ->first();
    }

    /**
     * @param array $input
     *
     * @return void
     */
    public static function storeCar(array $input)
    {
        $user = new Car();
        $user->name = $input['name'];
        $user->price = $input['price'];
        $user->car_brand_id = $input['car_brand_id'];
        $user->car_color_id = $input['car_color_id'];
        $user->car_transmission_type_id = $input['car_transmission_type_id'];
        $user->car_engine_type_id = $input['car_engine_type_id'];
        $user->year = Carbon::parse($input['year'])->format('Y');
        $user->mileage = $input['mileage'];
        $user->description = $input['description'];
        $user->is_featured = isset($input['is_featured']);
        $user->is_visible = isset($input['is_visible']);
        $user->save();
    }

    /**
     * @param int $id
     * @param array $input
     *
     * @return void
     */
    public static function updateCar(int $id, array $input)
    {
        $user = Car::findOrFail($id);
        $user->name = $input['name'];
        $user->price = $input['price'];
        $user->car_brand_id = $input['car_brand_id'];
        $user->car_color_id = $input['car_color_id'];
        $user->car_transmission_type_id = $input['car_transmission_type_id'];
        $user->car_engine_type_id = $input['car_engine_type_id'];
        $user->year = Carbon::parse($input['year'])->format('Y');
        $user->mileage = $input['mileage'];
        $user->description = $input['description'];
        $user->is_featured = isset($input['is_featured']);
        $user->is_visible = isset($input['is_visible']);
        $user->save();
    }
}
