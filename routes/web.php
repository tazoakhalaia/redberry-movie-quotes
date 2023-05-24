<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\MovieController;

Route::middleware('setLocale')->group(function () {
    Route::get('/', [LandingController::class, 'index'])->name('landing');
});

Route::group(['middleware' => 'setLocale', 'controller' => SessionController::class], function () {
    Route::view('/login', 'login')->name('login');
    Route::post('/login', 'login')->name('signup');
    Route::post('/logout', 'logout')->name('logout');
});

Route::group(['middleware' => ['admin', 'setLocale'], 'controller' => QuoteController::class], function () {
    Route::get('/quotes', 'index')->name('quotes.index');
    Route::delete('/quotes/{quote}', 'destroy')->name('quotes.delete');
    Route::get('/quotes/{quote}/edit', 'edit')->name('quotes.edit');
    Route::put('/quotes/{quote}', 'update')->name('quotes.update');
    Route::post('/quotes', 'store')->name('quotes.store');
});
Route::group(['middleware' => 'setLocale', 'controller' => MovieController::class], function () {
    Route::get('movies/{movie}', 'index')->name('movies.index');
    Route::post('/movies', 'store')->name('movies.store');
    Route::get('/movies/{movie}/edit', 'edit')->name('movies.edit');
    Route::put('/movies/{movie}', 'update')->name('movies.update');
});
