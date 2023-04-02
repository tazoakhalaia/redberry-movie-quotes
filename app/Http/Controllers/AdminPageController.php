<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class AdminPageController extends Controller
{
    public function index(){
        return view('login');
    }

}
