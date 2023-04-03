<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\LandingController;
use App\Http\Controllers\AdminPageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\QuoteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [LandingController::class, 'index'])->name('landing');
Route::get('/login', [AdminController::class, 'index'])->name('login');
Route::name('login')->post('/login', [SessionController::class, 'login']);
Route::middleware(['admin'])->group(function () {
    Route::get('/quotes', [QuoteController::class, 'index']);})->name('quotes');
Route::post('/logout', [SessionController::class, 'logout'])->name('logout');

