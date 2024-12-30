<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\ViewController;
use App\Http\Controllers\Admin\SoalController;
use App\Http\Controllers\Admin\LoginController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ViewController::class, 'index'])->name('home');

Route::get('simulasi', [ViewController::class, 'simulasi'])->name('simulasi');

Route::get('admin/login', [LoginController::class, 'index'])->name('admin.login');
Route::post('/admin/login', [LoginController::class, 'login'])->name('admin.login.post');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('soal', SoalController::class);

    Route::post('/logout', [LoginController::class, 'logout'])->name('admin.logout');
});
