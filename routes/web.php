
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

Route::middleware('guest')->group(function () {
    // Show forms
    Route::get('/register', [AuthController::class, 'showRegister'])
        ->name('register');

    Route::get('/login', [AuthController::class, 'showLogin'])
        ->name('login');

    // Process forms
    Route::post('/register', [AuthController::class, 'register'])
        ->name('register.store');

    Route::post('/login', [AuthController::class, 'login'])
        ->name('login.store');
});

// Authenticated pages
Route::middleware('auth')->group(function () {
    Route::get('/home', [AuthController::class, 'home'])
        ->name('home');

    Route::post('/logout', [AuthController::class, 'logout'])
        ->name('logout');
});
