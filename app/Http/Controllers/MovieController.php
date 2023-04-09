<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quotes;
use Illuminate\View\View;

class MovieController extends Controller
{
    public function index($id) : View{
        $quote = Quotes::find($id);
        return view('moviequotes', ['quote' => $quote]);
    }
}
