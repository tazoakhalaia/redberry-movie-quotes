<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use Illuminate\View\View;

class MovieController extends Controller
{
    public function index(Quote $quote) : View{
        return view('all-quotes', ['quote' => $quote]);
    }
}
