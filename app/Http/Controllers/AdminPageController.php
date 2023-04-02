<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminPageController extends Controller
{
    public function index():View{
        return view('adminpage');
    }
}
