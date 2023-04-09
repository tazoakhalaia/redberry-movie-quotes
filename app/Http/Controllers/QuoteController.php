<?php

namespace App\Http\Controllers;


use App\Http\Requests\Quote\StoreQuoteRequest;
use App\Models\Movie;
use App\Models\Quote;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class QuoteController extends Controller
{
    public function index():View{
        return view('quotes', ['quote' => Quote::all()]);
    }

    public function store(StoreQuoteRequest $request) : RedirectResponse{
        $image = $request->file('img');
        $filename = uniqid() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $filename);
        $movie = Movie::create(['name' => $request->input('movie_name')]);
        Quote::create([
            'title' => $request->input('title'),
            'img' => $filename,
            'movie_id' => $movie->id,
        ]);
        return redirect()->route('quotes');
    }
    public function destroy(Quote $quotes) : RedirectResponse{
        $quotes->delete();
        return redirect('quotes');
    }

    public function edit(Quote $quotes) : View{
        return view('edit-quotes', ['quote' => $quotes]);
    }

    public function update(StoreQuoteRequest $request, Quote $quotes) : RedirectResponse{
        $quotes->update($request->validated());
        return redirect('quotes');
    }

}
