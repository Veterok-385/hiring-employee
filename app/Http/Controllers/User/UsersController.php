<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vacancy;
use App\Models\Candidate;

class UsersController extends Controller
{
    public function index(Request $request)
    {         
        //$candidates = Candidate::all();
        $vacancy_id = (int) $request->cookie('vacancy');
        $candidates = Candidate::all()->where('vacancy_id', $vacancy_id);
       
        //dd($vacancy_id);
        $vacancies = Vacancy::all();
        $data = [$candidates, $vacancies];
        // dd($data);
        return view('user.index', compact('data'));
    }
}
