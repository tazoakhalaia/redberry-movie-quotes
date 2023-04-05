<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class SessionController extends Controller
{
    public function index():View{
        return view('login');
    }
    public function login(LoginRequest $request) : RedirectResponse
    {
        if(Auth::attempt($request->validated())) {
            return redirect('quotes');
        } else {
            return redirect('/login')->with('error', 'Invalid email or password.');
        }
    }

    public function logout() : RedirectResponse {
        Auth::logout();
        return redirect('login');
    }
}
