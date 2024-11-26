<?php

namespace App\Http\Requests\Admin\Car;

use App\Http\Requests\InternalFormRequest;

class CarDeleteRequest extends InternalFormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [];
    }
}
