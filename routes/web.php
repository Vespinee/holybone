<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonationController;

Route::get('/', function () {
    return view('/pages/welcome');
});
Route::get('/donation', [DonationController::class, 'index'])->name('donation');
