<?php

namespace App\Http\Requests\Admin\User;

use App\Http\Requests\InternalFormRequest;

class UserDeleteRequest extends InternalFormRequest
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
