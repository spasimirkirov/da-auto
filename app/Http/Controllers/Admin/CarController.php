<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Car\CarStoreRequest;
use App\Models\CarBrand;
use App\Models\CarColor;
use App\Models\CarEngineType;
use App\Models\CarTransmission;
use App\Models\CarTransmissionType;
use App\Services\CarService;
use Illuminate\Foundation\Http\FormRequest;
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

    public function edit(Request $request)
    {
        return 1;
    }

    public function update(FormRequest $request)
    {
        return 1;
    }
}
