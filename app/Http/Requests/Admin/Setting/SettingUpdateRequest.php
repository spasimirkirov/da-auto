<?php

namespace App\Http\Requests\Admin\Setting;

use App\Http\Requests\InternalFormRequest;

class SettingUpdateRequest extends InternalFormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'contact_email' => 'required|email|max:255',
            'contact_phone' => 'required|string|max:255',
        ];
    }
}
