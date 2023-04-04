<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\LandingController;
use App\Http\Controllers\AdminPageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\QuoteController;


Route::get('/', [LandingController::class, 'index'])->name('landing');
Route::get('/login', [AdminController::class, 'index'])->name('login');
Route::controller(SessionController::class)->group(function (){
    Route::name('login')->post('/login', 'login');
    Route::post('/logout', 'logout')->name('logout');
});
//Route::name('login')->post('/login', [SessionController::class, 'login']);
Route::middleware(['admin'])->group(function () {
    Route::view('/quotes', 'quotes');
})->name('quotes');
//Route::post('/logout', [SessionController::class, 'logout'])->name('logout');

