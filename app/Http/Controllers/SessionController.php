<?php

namespace App\Http\Controllers;

use App\Http\Requests\Login\StoreLoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class SessionController extends Controller
{
    public function index():View{
        return view('login');
    }
    public function login(StoreLoginRequest $request) : RedirectResponse
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
