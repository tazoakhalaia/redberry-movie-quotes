<?php

namespace App\Http\Controllers;



use App\Models\Quote;
use Illuminate\Support\Facades\App;
use Illuminate\View\View;

class LandingController extends Controller
{
    public function index () : View
    {
        return view('landing', ['quote' => Quote::inRandomOrder()->first()]);
    }

}
