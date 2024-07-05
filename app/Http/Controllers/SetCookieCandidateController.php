<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SetCookieCandidateController extends Controller
{
    public function index(Request $request)
    {  
        $id_candidate = $request->get('candidate');   
        return redirect()->intended('/user')->cookie(
            'candidate', $id_candidate, 3600
        );
        
    }
}
