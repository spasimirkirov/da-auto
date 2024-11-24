<?php

namespace App\Http\Requests\Admin\Car;

use App\Http\Requests\InternalFormRequest;

class CarStoreRequest extends InternalFormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'car_brand_id' => 'required|integer|exists:car_brands,id',
            'car_color_id' => 'required|integer|exists:car_colors,id',
            'car_transmission_type_id' => 'required|integer|exists:car_transmission_types,id',
            'car_engine_type_id' => 'required|integer|exists:car_engine_types,id',
            'year' => 'required|numeric',
            'mileage' => 'required|numeric',
            'description' => 'nullable|string',
            'is_featured' => 'sometimes|bool',
            'is_visible' => 'sometimes|bool',
        ];
    }
}
