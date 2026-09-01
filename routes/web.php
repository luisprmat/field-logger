<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::get('/', fn () => redirect()->intended('dashboard'));
    Route::view('/dashboard', 'dashboard')->name('dashboard');
});
