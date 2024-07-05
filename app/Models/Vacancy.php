<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_title', 
        'grade', 
        'max_salary', 
        'requirements_for_candidate', 
        'project_information',
        'department'
    ];

}
