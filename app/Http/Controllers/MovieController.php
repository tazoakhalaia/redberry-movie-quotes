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
        $movieWithQuotes = Movie::with('quote')->findOrFail($movie->id);
        return view('all-quotes', ['movie' => $movieWithQuotes]);
    }

    public function store(StoreMovieRequest $request) : RedirectResponse{
        Movie::create($request->validated());
        return redirect()->route('quotes');
    }

    public function edit(Movie $movie){
        return view('movie-name-edit', ['movie' => $movie]);
    }

    public function update(StoreMovieRequest $request, Movie $movie) : RedirectResponse{
        $movie->update($request->validated());
        return redirect()->route('quotes');
    }

}
