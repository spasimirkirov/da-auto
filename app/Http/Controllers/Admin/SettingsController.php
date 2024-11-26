<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Setting\SettingUpdateRequest;
use App\Services\SettingService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SettingsController extends Controller
{
    public function index(Request $request): View
    {
        return view('admin.settings.index', [
            'contact_email' => SettingService::getContactEmail(),
            'contact_phone' => SettingService::getContactPhone(),
        ]);
    }

    public function edit(Request $request): View
    {
        return view('admin.settings.edit', [
            'contact_email' => SettingService::getContactEmail(),
            'contact_phone' => SettingService::getContactPhone(),
        ]);
    }

    public function update(SettingUpdateRequest $request): RedirectResponse
    {
        SettingService::updateSettings($request->validated());

        return redirect(route('admin.settings.index'));
    }
}
