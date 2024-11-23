<?php

namespace App\Http\Controllers;

use App\Http\Requests\HomeIndexRequest;

class HomeController extends Controller
{
    public function index(HomeIndexRequest $request)
    {
        return view('home');
    }
}
