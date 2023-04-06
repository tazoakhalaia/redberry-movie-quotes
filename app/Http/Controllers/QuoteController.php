<?php

namespace App\Http\Controllers;

use App\Models\Quotes;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class QuoteController extends Controller
{
    public function index():View{
        return view('quotes', ['quotes' => Quotes::all()]);
    }

    public function destroy($id) : RedirectResponse{
        Quotes::find($id)->delete();
        return redirect('quotes');
    }

    public function edit(Quotes $quotes){
        return view('edit', ['quotes' => $quotes]);
    }
    
}
