<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ChirpController;
use App\Http\Controllers\Auth\SessionController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::controller(SessionController::class)->group(function () {
        Route::get('/login', 'create')->name('login');
        Route::post('/login', 'store')->name('login.store');
    });
    
    Route::controller(RegisterController::class)->group(function () {
        Route::get('/register', 'create')->name('register');
        Route::post('/register', 'store')->name('register.store');
    });
});

Route::delete('/logout', [SessionController::class, 'destroy'])->middleware('auth')->name('logout');

Route::controller(ChirpController::class)->group(function () {
    Route::get('/', 'index');
    Route::post('/chirps', 'store')->name('chirps.store');
    Route::get('/chirps/{chirp}/edit', 'edit')->name('chirps.edit');
    Route::patch('/chirps/{chirp}', 'update')->name('chirps.update');
    Route::delete('/chirps/{chirp}', 'destroy')->name('chirps.destroy');
});
