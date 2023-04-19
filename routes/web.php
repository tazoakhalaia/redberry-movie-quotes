<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\LandingController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\MovieController;

Route::prefix('/{locale}')->middleware('setLocale')->group(function () {
    Route::get('/', [LandingController::class, 'index'])->name('landing');
    Route::get('/quotes', [QuoteController::class, 'index'])->name('quotes');
    Route::get('/login', [SessionController::class, 'index'])->name('login');
});

Route::get('/', function () {
    return redirect()->route('landing', ['locale' => 'en']);
});
Route::get('/login', [SessionController::class, 'index'])->name('login');
Route::controller(SessionController::class)->group(function (){
    Route::post('/login', 'login')->name('login');
    Route::post('/logout', 'logout')->name('logout');
});
Route::group(['middleware' => 'admin', 'controller' => QuoteController::class], function (){
    Route::get('/quotes', 'index')->name('quotes');
    Route::get('/quotes/{quotes}', 'destroy')->name('quotes.delete');
    Route::get('/quotes-edit/{quotes}', 'edit')->name('edit');
    Route::put('/quotes/{quotes}' , 'update')->name('quotes-update');
    Route::post('/quotes', 'store')->name('quotes-create');
});

Route::group(['controller' => MovieController::class], function (){
    Route::get('movies/{movie}',  'index')->name('movies');
    Route::post('/movie', 'store')->name('movies.create');
    Route::get('/movie-edit/{movie}', 'edit')->name('movie.edit');
    Route::put('/movies/{movie}' , 'update')->name('movies.update');
});


