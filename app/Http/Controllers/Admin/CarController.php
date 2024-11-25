<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Car\CarStoreRequest;
use App\Http\Requests\Admin\Car\CarUpdateRequest;
use App\Models\CarBrand;
use App\Models\CarColor;
use App\Models\CarEngineType;
use App\Models\CarTransmissionType;
use App\Services\CarService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.cars.index', [
            'cars' => CarService::getCarPagination(),
        ]);
    }

    public function create(Request $request)
    {
        return view(
            'admin.cars.create',
            [
                'carBrandIdNameMap' => CarBrand::pluck('name', 'id'),
                'carColorIdNameMap' => CarColor::pluck('name', 'id'),
                'carTransmissionIdNameMap' => CarTransmissionType::pluck('name', 'id'),
                'carEngineIdNameMap' => CarEngineType::pluck('name', 'id'),
            ]
        );
    }

    public function store(CarStoreRequest $request)
    {
        CarService::storeCar($request->validated());

        return redirect(route('cars.index'));
    }

    /**
     * @param Request $request
     * @param int $id
     *
     * @return View
     */
    public function show(Request $request, int $id)
    {
        return view('admin.cars.show', [
            'car' => CarService::getCarData($id)
        ]);
    }

    public function edit(Request $request, int $id)
    {
        return view('admin.cars.edit', [
            'car' => CarService::getCarData($id),
            'carBrandIdNameMap' => CarBrand::pluck('name', 'id'),
            'carColorIdNameMap' => CarColor::pluck('name', 'id'),
            'carTransmissionIdNameMap' => CarTransmissionType::pluck('name', 'id'),
            'carEngineIdNameMap' => CarEngineType::pluck('name', 'id'),
        ]);
    }

    public function update(CarUpdateRequest $request, int $id)
    {
        CarService::updateCar($id, $request->validated());

        return redirect(route('cars.show', ['id' => $id]));
    }
}
