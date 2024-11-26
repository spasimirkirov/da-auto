<?php

namespace App\Services;

use App\Models\Setting;
use App\Models\SettingType;
use Illuminate\Support\Facades\Auth;

class SettingService
{
    /**
     * @return mixed
     */
    public static function getContactEmail()
    {
        return Setting::where('setting_type_id', '=', SettingType::slugId(SettingType::CONTACT_EMAIL))->first()?->value;
    }

    /**
     * @return mixed
     */
    public static function getContactPhone()
    {
        return Setting::where('setting_type_id', '=', SettingType::slugId(SettingType::CONTACT_PHONE))->first()?->value;
    }

    public static function updateSettings(array $input, array $only = [])
    {
        foreach ($input as $slug => $value) {
            $setting = Setting::firstOrNew(['setting_type_id' => SettingType::slugId($slug)]);
            $setting->value = $value;
            $setting->updated_by = Auth::id();
            $setting->save();
        }
    }
}
