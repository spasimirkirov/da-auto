<?php

namespace App\Http\Requests\Admin\User;

use App\Http\Requests\InternalFormRequest;

class UserUpdateRequest extends InternalFormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $id = $this->route('id');

        return [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users,email,' . $id . '',
        ];
    }
}
