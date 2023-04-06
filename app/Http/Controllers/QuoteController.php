<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuoteRequest;
use App\Models\Quotes;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class QuoteController extends Controller
{
    public function index():View{
        return view('quotes', ['quote' => Quotes::all()]);
    }

    public function store(QuoteRequest $request) : RedirectResponse{
        Quotes::create($request->validated());
        return redirect('quotes');
    }
    public function destroy(Quotes $quotes) : RedirectResponse{
        $quotes->delete();
        return redirect('quotes');
    }

    public function edit(Quotes $quotes) : View{
        return view('editquotes', ['quote' => $quotes]);
    }

    public function update() : RedirectResponse{
        return redirect('quotes');
    }
}
