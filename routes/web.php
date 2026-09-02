<?php

use App\Http\Controllers\MeterController;
use App\Http\Controllers\PwaManifestController;
use App\Http\Controllers\ReadingController;
use Illuminate\Support\Facades\Route;

Route::get('manifest.json', PwaManifestController::class)->name('pwa.manifest');

Route::middleware(['auth'])->group(function () {
    Route::get('/', fn () => redirect()->intended(route('meters.index')));
    Route::resource('meters', MeterController::class);
    Route::resource('meters.readings', ReadingController::class)
        ->except(['index', 'create', 'show']);
});
