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

    public function create(Request $request) : RedirectResponse{
        $quote = new Quotes();
        $quote->title = $request->title;
        $quote->name = $request->name;
        $quote->save();
        return redirect('quotes');
    }
    public function destroy($id) : RedirectResponse{
        Quotes::find($id)->delete();
        return redirect('quotes');
    }

    public function edit(Quotes $quotes) : View{
        return view('edit', ['quotes' => $quotes]);
    }

    public function update(Request $request, Quotes $quotes){
        $quotes->update($request->validate());
        return redirect()->route('quotes');
    }
}
