<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InternalGetRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
}
