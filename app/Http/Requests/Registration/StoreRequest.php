<?php

namespace App\Http\Requests\Registration;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class StoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'first_name' => ['required', 'string', 'max:50'],
            'middle_name' => ['required', 'string', 'max:50'],
            'last_name' => ['required', 'string', 'max:50'],
            'job_title' => ['required', 'string', 'max:50'],
            'login' => ['required', 'string', 'max:100', 'unique:users'],
            'password' => ['required', 'string', Password::defaults(), 'confirmed'],
            'agreement' => ['accepted'],
        ];
    }
}
