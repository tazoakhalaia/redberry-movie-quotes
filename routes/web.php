<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\LandingController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\QuoteController;


Route::get('/', [LandingController::class, 'index'])->name('landing');
Route::get('/login', [SessionController::class, 'index'])->name('login');
Route::controller(SessionController::class)->group(function (){
    Route::post('/login', 'login')->name('login');
    Route::post('/logout', 'logout')->name('logout');
});
Route::middleware(['admin'])->group(function () {
    Route::controller(QuoteController::class)->group(function () {
        Route::get('/quotes', [QuoteController::class, 'index'])->name('quotes');
        Route::get('/quotes-delete/{quotes}', 'destroy')->name('quotes-delete');
        Route::get('/quotes-edit/{quotes}', 'edit')->name('edit');
        Route::put('/quotes-update/{id}' , 'update')->name('quotes-update');
        Route::post('/quotes-create', 'create')->name('quotes-create');
    });
});


