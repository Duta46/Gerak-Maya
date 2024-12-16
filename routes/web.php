<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\ViewController;
use App\Http\Controllers\Admin\SoalController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ViewController::class, 'index']);

Route::get('simulasi', [ViewController::class, 'simulasi'])->name('simulasi');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('soal', SoalController::class);
});
