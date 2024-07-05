<?php

namespace App\Http\Requests\AddVacancy;

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
            'job_title' => ['required', 'string', 'max:50'],
            'grade' => ['required', 'string', 'max:50'],
            'max_salary' => ['required', 'string', 'max:50'],
            'requirements_for_candidate' => ['required', 'string', 'max:500'],
            'project_information' => ['required', 'string', 'max:500'],
            'department' => ['required', 'string', 'max:50'],
        ];
    }
}
