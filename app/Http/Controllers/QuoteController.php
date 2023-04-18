<?php

namespace App\Http\Controllers;



use App\Http\Requests\Quote\StoreQuoteRequest;
use App\Http\Requests\UpdateQuoteRequest;
use App\Models\Movie;
use App\Models\Quote;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class QuoteController extends Controller
{
    public function index():View{
        return view('quotes', ['quote' => Quote::all(), 'movies' => Movie::all()]);
    }

    public function store(StoreQuoteRequest $request) : RedirectResponse{
        $image = $request->file('img');
        $filename = uniqid() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $filename);
        Quote::create([
            'title' => $request->input('title'),
            'img' => $filename,
            'movie_id' => $request->input('movie_id'),
        ]);
        return redirect()->route('quotes');
    }
    public function destroy(Quote $quotes) : RedirectResponse{
        $quotes->delete();
        return redirect()->route('quotes');
    }

    public function edit(Quote $quotes) : View{
        return view('edit-quotes', ['quote' => $quotes]);
    }

    public function update(UpdateQuoteRequest $request, $id) : RedirectResponse{
        $quote = Quote::findOrFail($id);
        $quote->title = $request->input('title');
        if ($request->hasFile('img')) {
            if ($quote->img && Storage::exists('public/images/' . $quote->img)) {
                Storage::delete('public/images/' . $quote->img);
            }
            $file = $request->file('img');
            $filename = uniqid() . '_' . $file->getClientOriginalName();
            $file->move(public_path('/images'), $filename);
            $quote->img = $filename;
        }
        $quote->save();
        return redirect()->route('quotes');
    }

}
