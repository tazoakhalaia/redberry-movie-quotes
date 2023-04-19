<?php

namespace App\Http\Controllers;


use App\Models\Quote;
use Illuminate\Support\Facades\App;
use Illuminate\View\View;

class LandingController extends Controller
{
//    public function index():View{
//        $quote = Quote::inRandomOrder()->first();
//        return view('landing', ['quote' => $quote]);
//    }
    public function index($locale)
    {
        App::setLocale($locale);
        $quote = Quote::inRandomOrder()->first();

        return view('landing', compact('quote', 'locale'));
    }
}
