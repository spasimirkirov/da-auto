<?php

namespace App\Http\Requests\Admin\Car;

use App\Http\Requests\InternalFormRequest;

class CarImageUploadRequest extends InternalFormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'uploadedFile' => 'required|image|mimes:jpeg,png,jpg,gif|max:4096',
        ];
    }
}
