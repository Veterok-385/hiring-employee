<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name', 
        'last_name', 
        'middle_name', 
        'job_title', 
        'company', 
        'salary', 
        'city', 
        'date_of_birth', 
        'telephone', 
        'email', 
        'additional_information',   
        'status',
        'vacancy_id'
    ];
}
