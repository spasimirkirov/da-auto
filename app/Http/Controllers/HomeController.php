<?php

namespace App\Http\Controllers;

use App\Http\Requests\HomeIndexRequest;
use App\Models\FeaturedCar;

class HomeController extends Controller
{
    public function index(HomeIndexRequest $request)
    {
        return view('home', [
            'featuredCars' => FeaturedCar::FEATURED_CARS_DUMMY_DATA
        ]);
    }
}
