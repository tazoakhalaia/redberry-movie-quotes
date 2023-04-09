<?php

namespace App\Http\Controllers;


use App\Http\Requests\QuoteRequest;
use App\Models\Movies;
use App\Models\Quotes;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class QuoteController extends Controller
{
    public function index():View{
        return view('quotes', ['quote' => Quotes::all()]);
    }

    public function store(QuoteRequest $request) : RedirectResponse{
        $image = $request->file('img');
        $filename = uniqid() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $filename);

        $movie = Movies::create(['name' => $request->input('movie_name')]);

        $quote = new Quotes([
            'title' => $request->input('title'),
            'img' => $filename,
            'movie_id' => $movie->id,
        ]);
        $quote->save();

        return redirect()->route('quotes');
    }
    public function destroy(Quotes $quotes) : RedirectResponse{
        $quotes->delete();
        return redirect('quotes');
    }

    public function edit(Quotes $quotes) : View{
        return view('editquotes', ['quote' => $quotes]);
    }

    public function update(QuoteRequest $request, Quotes $quotes) : RedirectResponse{
        $quotes->update($request->validated());
        return redirect('quotes');
    }
}
