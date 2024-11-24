<?php

namespace App\Http\Requests\Auth;

use App\Http\Requests\InternalGetRequest;
use App\Models\User;

class RegisterRequest extends InternalGetRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return User::count() === 0;
    }
}
