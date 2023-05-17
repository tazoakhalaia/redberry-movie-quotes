<?php

namespace App\Http\Controllers;

use App\Http\Requests\Login\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function login(LoginRequest $request) : RedirectResponse
    {
        
        if(Auth::attempt($request->validated())) {
            return redirect()->route('quotes');
        } else {
            return redirect()->route('login')->with('error', 'Invalid email or password.');
        }
    }

    public function logout() : RedirectResponse {
        Auth::logout();
        return redirect()->route('login');
    }
}
