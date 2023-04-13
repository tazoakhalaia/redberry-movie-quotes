<?php

namespace App\Http\Controllers;

use App\Http\Requests\Movie\StoreMovieRequest;
use App\Http\Requests\Quote\StoreQuoteRequest;
use App\Models\Movie;
use App\Models\Quote;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;

class MovieController extends Controller
{
    public function index(Movie $movie): View
    {
        $movieWithQuotes = Movie::with('quote')->findOrFail($movie->id);
        return view('all-quotes', ['movie' => $movieWithQuotes]);
    }

    public function store(StoreMovieRequest $request) : RedirectResponse{
        Movie::create([
            'name' => $request->name,
        ]);
        return redirect()->route('quotes');
    }

    public function edit(Movie $movie){
        return view('movie-name-edit', ['movies' => $movie]);
    }

    public function update(StoreMovieRequest $request, Movie $movie) : RedirectResponse{
        $movie->update($request->validated());
        return redirect()->route('quotes');
    }

}
