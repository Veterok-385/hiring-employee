<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AddCandidate\StoreRequest;
use App\Models\Candidate;

class AddCandidateController extends Controller
{
    public function index()
    {       
        return view('addcandidate.index');
    }

    public function store(StoreRequest $request)
    {
        
        if($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $path = $photo->storeAs('img/kandidats', "1001.png");            
        }

        $data = $request->only(['first_name', 'last_name', 'middle_name', 'job_title', 'company', 'salary', 'city', 'date_of_birth', 'telephone', 'email', 'additional_information', 'vacancy_id']);

        
        $data['status']="собеседование";
        $data['vacancy_id']=$request->cookie('vacancy');
        
        

        $candidate = Candidate::query()->create($data);
        

        if($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $path = $photo->storeAs('img/candidates', $candidate->id . ".png");            
        }

                

        return redirect()->intended('/user');
    }
}
