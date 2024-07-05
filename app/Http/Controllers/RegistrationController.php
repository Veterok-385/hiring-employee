<?php

namespace App\Http\Controllers;

use App\Http\Requests\Registration\StoreRequest;
use App\Models\EmployeeCategory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegistrationController extends Controller
{
    public function index()
    {
        $categories = EmployeeCategory::all();
        return view('registration.index', compact('categories'));
    }

    public function store(StoreRequest $request)
    {
        $data = $request->only(['first_name', 'middle_name', 'last_name', 'job_title', 'login', 'password', 'employee_category_id']);

        $user = User::query()->create($data);

        Auth::login($user);

        return redirect()->intended('/user');
    }
}
