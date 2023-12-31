<?php

namespace App\Http\Controllers;

use App\Http\Requests\Movie\StoreMovieRequest;
use App\Models\Movie;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class MovieController extends Controller
{
    public function index(Movie $movie): View
    {
        $quotes = $movie->quotes;
        return view('movie-quotes', ['movie' => $movie, 'quotes' => $quotes]);
    }

    public function store(StoreMovieRequest $request): RedirectResponse
    {
        Movie::create($request->validated());
        return redirect()->route('quotes.index');
    }

    public function edit(Movie $movie)
    {
        return view('movie-edit', ['movie' => $movie]);
    }

    public function update(StoreMovieRequest $request, Movie $movie): RedirectResponse
    {
        $movie->update($request->validated());
        return redirect()->route('quotes.index');
    }

}
