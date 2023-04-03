<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)) {
            return redirect('quotes');
        } else {
            return redirect('/login')->with('error', 'Invalid email or password.');
        }
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');
    }
}
