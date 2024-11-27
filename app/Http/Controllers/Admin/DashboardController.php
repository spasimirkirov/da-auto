<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\CarService;
use App\Services\SettingService;
use App\Services\UserService;
use Illuminate\Http\RedirectResponse;
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
    public function index(Request $request): RedirectResponse
    {
        return redirect(route('admin.dashboard'));
    }

    /**
     * @param Request $request
     *
     * @return View
     *
     * @method GET
     * @endpoint /dashboard
     */
    public function dashboard(Request $request): View
    {
        return view('admin.dashboard', [
            'usersCount' => UserService::getUsersCount(),
            'carsCount' => CarService::getCarsCount(),
            'contactEmail' => SettingService::getContactEmail(),
            'contactPhone' => SettingService::getContactPhone(),
        ]);
    }
}
