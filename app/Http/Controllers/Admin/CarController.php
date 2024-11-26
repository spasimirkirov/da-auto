<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Car\CarDeleteRequest;
use App\Http\Requests\Admin\Car\CarStoreRequest;
use App\Http\Requests\Admin\Car\CarUpdateRequest;
use App\Models\CarBrand;
use App\Models\CarColor;
use App\Models\CarEngineType;
use App\Models\CarTransmissionType;
use App\Services\CarService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * @param Request $request
     *
     * @return View
     *
     * @method GET
     * @endpoint /admin/cars
     */
    public function index(Request $request): View
    {
        return view('admin.cars.index', [
            'cars' => CarService::getCarPagination(),
        ]);
    }

    /**
     * @param Request $request
     *
     * @return View
     *
     * @method GET
     * @endpoint /admin/cars/create
     */
    public function create(Request $request): View
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

    /**
     * @param CarStoreRequest $request
     *
     * @return RedirectResponse
     *
     * @method POST
     * @endpoint /admin/cars
     */
    public function store(CarStoreRequest $request): RedirectResponse
    {
        CarService::storeCar($request->validated());

        return redirect(route('cars.index'));
    }

    /**
     * @param Request $request
     * @param int $id
     *
     * @return View
     *
     * @method GET
     * @endpoint /admin/cars/{id}
     */
    public function show(Request $request, int $id): View
    {
        return view('admin.cars.show', [
            'car' => CarService::getCarData($id)
        ]);
    }

    /**
     * @param Request $request
     * @param int $id
     *
     * @return View
     *
     * @method GET
     * @endpoint /admin/cars/{id}/edit
     */
    public function edit(Request $request, int $id): View
    {
        return view('admin.cars.edit', [
            'car' => CarService::getCarData($id),
            'carBrandIdNameMap' => CarBrand::pluck('name', 'id'),
            'carColorIdNameMap' => CarColor::pluck('name', 'id'),
            'carTransmissionIdNameMap' => CarTransmissionType::pluck('name', 'id'),
            'carEngineIdNameMap' => CarEngineType::pluck('name', 'id'),
        ]);
    }

    /**
     * @param CarUpdateRequest $request
     * @param int $id
     *
     * @return RedirectResponse
     *
     * @method PUT
     * @endpoint /admin/cars/{id}
     */
    public function update(CarUpdateRequest $request, int $id): RedirectResponse
    {
        CarService::updateCar($id, $request->validated());

        return redirect(route('cars.show', ['id' => $id]));
    }

    /**
     * @param CarDeleteRequest $request
     * @param int $id Car ID
     *
     * @return RedirectResponse
     *
     * @method DELETE
     * @endpoint /admin/cars/{id}
     */
    public static function delete(CarDeleteRequest $request, int $id): RedirectResponse
    {
        CarService::deleteCar($id);

        return redirect(route('cars.index'));
    }
}
