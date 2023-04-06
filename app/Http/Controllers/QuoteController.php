<?php

namespace App\Http\Controllers;

use App\Models\Quotes;
use Illuminate\Http\Request;
use Illuminate\View\View;

class QuoteController extends Controller
{
    public function index():View{
        return view('quotes', ['quotes' => Quotes::all()]);
    }

    public function destroy($id){
        Quotes::find($id)->delete();
        return redirect('quotes');
    }
}
