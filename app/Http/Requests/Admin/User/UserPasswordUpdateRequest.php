<?php

namespace App\Http\Requests\Admin\User;

use App\Http\Requests\InternalFormRequest;

class UserPasswordUpdateRequest extends InternalFormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'password' => 'required|string|min:6|confirmed',
        ];
    }
}
