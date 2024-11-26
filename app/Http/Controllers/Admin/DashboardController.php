<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    /**
     * @param Request $request
     *
     * @return View
     *
     * @method GET
     * @endpoint /
     */
    public function index(Request $request): View
    {
        return view('admin.dashboard');
    }
}
