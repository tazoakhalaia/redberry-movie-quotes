<?php

namespace App\Http\Controllers;

use App\Http\Requests\Quote\StoreQuoteRequest;
use App\Http\Requests\Quote\UpdateQuoteRequest;
use App\Models\Movie;
use App\Models\Quote;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class QuoteController extends Controller
{
    public function index(): View
    {
        return view('quotes', ['quote' => Quote::all(), 'movies' => Movie::all()]);
    }

    public function store(StoreQuoteRequest $request): RedirectResponse
    {
        $image = $request->file('img');
        $filename = uniqid() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $filename);
        Quote::create([
            ...$request->validated(),
            'img' => $filename,
        ]);
        return redirect()->route('quotes.index');
    }
    public function destroy(Quote $quote): RedirectResponse
    {
        $quote->delete();
        return redirect()->route('quotes.index');
    }

    public function edit(Quote $quote): View
    {
        return view('edit-quote', ['quote' => $quote]);
    }

    public function update(UpdateQuoteRequest $request, Quote $quote): RedirectResponse
    {
        $validatedData = $request->validated();
        if ($request->hasFile('img')) {
            if ($quote->img && Storage::exists('public/images/' . $quote->img)) {
                Storage::delete('public/images/' . $quote->img);
            }
            $file = $request->file('img');
            $filename = uniqid() . '_' . $file->getClientOriginalName();
            $file->move(public_path('/images'), $filename);
            $validatedData['img'] = $filename;
        }
        $quote->update($validatedData);
        return redirect()->route('quotes.index');
    }

}
