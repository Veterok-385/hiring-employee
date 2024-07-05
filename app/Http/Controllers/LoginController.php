<?php

namespace App\Http\Controllers;

use App\Http\Requests\Login\StoreRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function store(StoreRequest $request)
    {
        $data = $request->only(['login', 'password']);

        $remember = (bool) $request->input('remember');


        if (!Auth::attempt($data, $remember)) {
            return back()->withErrors([
                'login' => 'Неверный логин или пароль.',
            ])->onlyInput('login');
        }

        $request->session()->regenerate();
        return redirect()->intended('/user');
    }
}
