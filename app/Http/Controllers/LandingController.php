<?php

namespace App\Http\Controllers;

use App\Models\Quotes;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LandingController extends Controller
{
    public function index():View{
        $quote = Quotes::inRandomOrder()->first();
        return view('landing', ['quote' => $quote]);
    }
}
