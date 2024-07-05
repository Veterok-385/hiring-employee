<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    public function employee_categories(): BelongsTo
    {
        return $this->belongsTo(EmployeeCategory::class);
    }

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'login',
        'password',
        'job_title',
        'employee_category_id',
    ];

    protected function casts(): array
    {
        return [
            'password' => 'hashed',
        ];
    }

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
