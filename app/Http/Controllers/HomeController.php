<?php

namespace App\Http\Controllers;

use App\Http\Requests\HomeIndexRequest;
use App\Models\FeaturedCar;
use App\Models\NewCar;

class HomeController extends Controller
{
    public function index(HomeIndexRequest $request)
    {
        return view('home', [
            'featuredCars' => FeaturedCar::FEATURED_CARS_DUMMY_DATA,
            'newCars' => NewCar::NEW_CARS_DUMMY_DATA,
        ]);
    }
}
