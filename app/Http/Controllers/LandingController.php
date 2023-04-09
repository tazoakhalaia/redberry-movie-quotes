<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LandingController extends Controller
{
    public function index():View{
        $quote = Quote::inRandomOrder()->first();
        return view('landing', ['quote' => $quote]);
    }
}
