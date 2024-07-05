<?php

namespace App\Http\Requests\Login;

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
            'login' => ['required', 'string', 'max:100', 'exists:users'],
            'password' => ['required', 'string', Password::defaults()],
            'remember' => ['nullable', 'boolean'],
        ];
    }
}
