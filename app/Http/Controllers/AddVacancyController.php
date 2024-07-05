<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AddVacancy\StoreRequest;
use App\Models\Vacancy;

class AddVacancyController extends Controller
{
    public function index()
    {       
        return view('addvacancy.index');
    }

    public function store(StoreRequest $request)
    {
        $data = $request->only(['job_title', 'grade', 'max_salary', 'requirements_for_candidate', 'project_information', 'department']);

        $vacancy = Vacancy::query()->create($data);

        //Auth::login($user);

        return redirect()->intended('/user');
    }
}
