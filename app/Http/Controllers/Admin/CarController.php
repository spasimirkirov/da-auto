<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Car\CarDeleteRequest;
use App\Http\Requests\Admin\Car\CarImageUploadRequest;
use App\Http\Requests\Admin\Car\CarStoreRequest;
use App\Http\Requests\Admin\Car\CarUpdateRequest;
use App\Models\CarBrand;
use App\Models\CarColor;
use App\Models\CarEngineType;
use App\Models\CarImage;
use App\Models\CarTransmissionType;
use App\Services\CarService;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

        return redirect(route('admin.cars.index'));
    }

    /**
     * @param Request $request
     * @param int $id
     *
     * @return View
     *
     * @method GET
     * @endpoint /admin/cars/{id}/details
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
     * @endpoint /admin/cars/{id}/images
     */
    public function images(Request $request, int $id): View
    {
        return view('admin.cars.images', [
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

        return redirect(route('admin.cars.show', ['id' => $id]));
    }

    /**
     * @param CarImageUploadRequest $request
     * @param int $id
     *
     * @return RedirectResponse
     */
    public function handleUpload(CarImageUploadRequest $request, int $id): RedirectResponse
    {
        // Store the image
        $image = $request->file('uploadedFile');
        $imageName = time() . '_' . $image->getClientOriginalName();
        $imagePath = $image->storeAs('images/cars', $imageName, 'public');

        // Save to database
        CarImage::create([
            'car_id' => $id,
            'image_name' => $imageName,
            'image_path' => $imagePath,
        ]);

        return redirect(route('admin.cars.images', ['id' => $id]));
    }

    /**
     * @param Request $request
     * @param int $id
     * @param int $imageId
     *
     * @return RedirectResponse
     */
    public function handleRemove(Request $request, int $id, int $imageId): RedirectResponse
    {
        $carImage = CarImage::findOrFail($imageId);

        if (Storage::disk('public')->exists($carImage->image_path)) {
            Storage::disk('public')->delete($carImage->image_path);
        } else {
            throw new Exception('File doesn\'t exist');
        }

        $carImage->delete();

        return redirect(route('admin.cars.images', ['id' => $id]));
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

        return redirect(route('admin.cars.index'));
    }
}
