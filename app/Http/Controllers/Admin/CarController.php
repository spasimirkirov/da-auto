<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
        return 1;
    }

    public function store(FormRequest $request)
    {
        return 1;
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
