<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SetCookieVacancyController extends Controller
{
    public function index(Request $request)
    {  
        $id_vacancy = $request->get('vacancy');   
        return redirect()->intended('/user')->cookie(
            'vacancy', $id_vacancy, 3600
        );
        
    }
}
