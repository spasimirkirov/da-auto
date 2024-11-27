<?php

namespace App\Http\Controllers;

use App\Http\Requests\OnlineCatalogueIndexRequest;
use App\Services\CarService;

class OnlineCatalogueController extends Controller
{
    public function index(OnlineCatalogueIndexRequest $request)
    {
        return view('online-catalogue', [
            'products' => CarService::getCarPagination(9),
        ]);
    }
}
