<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CheckAdminController extends Controller
{
    public function login()
    {
        $email = request()->string('email');
        $password = request()->string('password');
        $user = DB::table('users')->where('email', $email)->first();
        $userPassword = DB::table('users')->where('password', $password)->first();
        if ($user && $userPassword) {
            return redirect('/');
        } else {
            return redirect('/admin')->with('error', 'Invalid email or password.');
        }
    }
}
