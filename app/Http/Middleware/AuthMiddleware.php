<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class AuthMiddleware extends Middleware
{
    protected function redirectTo(Request $request): string
    {
        return route('login');
    }
}
