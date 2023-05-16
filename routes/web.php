<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\LandingController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\MovieController;

Route::middleware('setLocale')->group(function () {
    Route::get('/', [LandingController::class, 'index'])->name('landing');
});

Route::controller(SessionController::class)->group(function (){
    Route::middleware('setLocale')->group(function () {
        Route::view('/login', 'login')->name('login');
    });
    Route::post('/login', 'login')->name('signup');
    Route::post('/logout', 'logout')->name('logout');
});
Route::group(['middleware' => 'admin', 'controller' => QuoteController::class], function (){
    Route::middleware('setLocale')->group(function () {
        Route::get('/quotes', 'index')->name('quotes');
    });
    Route::delete('/quotes/{quote}', 'destroy')->name('quotes.delete');
    Route::get('/quotes-edit/{quote}', 'edit')->name('edit');
    Route::put('/quotes/{quote}' , 'update')->name('quotes-update');
    Route::post('/quotes', 'store')->name('quotes-create');
});
Route::group(['controller' => MovieController::class], function (){
    Route::middleware('setLocale')->group(function () {
        Route::get('movies/{movie}',  'index')->name('movies');
    });
    Route::post('/movie', 'store')->name('movies.create');
    Route::get('/movie-edit/{movie}', 'edit')->name('movie.edit');
    Route::put('/movies/{movie}' , 'update')->name('movies.update');
});


