<?php

namespace App\Services;

use App\Models\Car;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Auth;

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
    public static function getCarPagination(?int $paginationLength = 25): LengthAwarePaginator
    {
        return self::getCarQuery()
            ->paginate($paginationLength);
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
        $car = new Car();
        $car->name = $input['name'];
        $car->price = $input['price'];
        $car->car_brand_id = $input['car_brand_id'];
        $car->car_color_id = $input['car_color_id'];
        $car->car_transmission_type_id = $input['car_transmission_type_id'];
        $car->car_engine_type_id = $input['car_engine_type_id'];
        $car->year = Carbon::parse($input['year'])->format('Y');
        $car->mileage = $input['mileage'];
        $car->description = $input['description'];
        $car->is_featured = isset($input['is_featured']);
        $car->is_visible = isset($input['is_visible']);
        $car->created_by = Auth::id();
        $car->save();
    }

    /**
     * @param int $id
     * @param array $input
     *
     * @return void
     */
    public static function updateCar(int $id, array $input)
    {
        $car = Car::findOrFail($id);
        $car->name = $input['name'];
        $car->price = $input['price'];
        $car->car_brand_id = $input['car_brand_id'];
        $car->car_color_id = $input['car_color_id'];
        $car->car_transmission_type_id = $input['car_transmission_type_id'];
        $car->car_engine_type_id = $input['car_engine_type_id'];
        $car->year = Carbon::parse($input['year'])->format('Y');
        $car->mileage = $input['mileage'];
        $car->description = $input['description'];
        $car->is_featured = isset($input['is_featured']);
        $car->is_visible = isset($input['is_visible']);
        $car->updated_by = Auth::id();
        $car->save();
    }

    public static function deleteCar(int $id)
    {
        $car = Car::findOrFail($id);
        $car->updated_by = Auth::id();
        $car->save();
        $car->delete();
    }

    /**
     * @return int
     */
    public static function getCarsCount(): int
    {
        return Car::count();
    }
}
