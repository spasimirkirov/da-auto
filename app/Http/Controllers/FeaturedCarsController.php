<?php

namespace App\Http\Controllers;

use App\Http\Requests\FeaturedCarIndexRequest;

class FeaturedCarsController extends Controller
{
    public function index(FeaturedCarIndexRequest $request)
    {
        return view('featured-cars');
    }
}
