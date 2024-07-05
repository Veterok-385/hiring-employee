<?php

namespace App\Http\Requests\AddCandidate;

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
            'last_name' => ['required', 'string', 'max:50'],
            'middle_name' => ['required', 'string', 'max:50'],

            'job_title' => ['nullable', 'string', 'max:50'],
            'company' => ['nullable', 'string', 'max:50'],
            'salary' => ['nullable', 'string', 'max:50'],
            'city' => ['nullable', 'string', 'max:50'],

            'date_of_birth' => ['nullable'],
            'telephone' => ['required'],
            'email' => ['required'],
            'additional_information' => ['nullable'],
            
            'photo' =>  'file|mimes:jpg,jpeg,png,gif|max:1024',
            
        ];
    }
}
