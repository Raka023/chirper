<?php

use App\Http\Controllers\ChirpController;
use Illuminate\Support\Facades\Route;

Route::controller(ChirpController::class)->group(function () {
    Route::get('/', 'index');
    Route::post('/chirps', 'store')->name('chirps.store');
    Route::get('/chirps/{chirp}/edit', 'edit')->name('chirps.edit');
    Route::patch('/chirps/{chirp}', 'update')->name('chirps.update');
    Route::delete('/chirps/{chirp}', 'destroy')->name('chirps.destroy');
});
