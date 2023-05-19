<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\LandingController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\MovieController;

Route::middleware('setLocale')->group(function () {
    Route::get('/', [LandingController::class, 'index'])->name('landing');
});

Route::group(['middleware' => 'setLocale', 'controller' => SessionController::class],function (){
    Route::view('/login', 'login')->name('login');
    Route::post('/login', 'login')->name('signup');
    Route::post('/logout', 'logout')->name('logout');
});

Route::group(['middleware' => ['admin', 'setLocale'], 'controller' => QuoteController::class], function (){
    Route::get('/quote', 'index')->name('quote.index');
    Route::delete('/quote/{quote}', 'destroy')->name('quote.delete');
    Route::get('/quotes-edit/{quote}', 'edit')->name('quote.edit');
    Route::put('/quote/{quote}' , 'update')->name('quote.update');
    Route::post('/quote', 'store')->name('quote.create');
});
Route::group(['middleware' => 'setLocale', 'controller' => MovieController::class], function (){
    Route::get('movie/{movie}',  'index')->name('movie.index');
    Route::post('/movie', 'store')->name('movie.create');
    Route::get('/movie-edit/{movie}', 'edit')->name('movie.edit');
    Route::put('/movie/{movie}' , 'update')->name('movie.update');
});


