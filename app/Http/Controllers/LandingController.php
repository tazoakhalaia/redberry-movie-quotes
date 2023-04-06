<?php

namespace App\Http\Controllers;

use App\Models\Quotes;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LandingController extends Controller
{
    public function index():View{
        return view('landing', ['quotes' => Quotes::all()]);
    }
}
