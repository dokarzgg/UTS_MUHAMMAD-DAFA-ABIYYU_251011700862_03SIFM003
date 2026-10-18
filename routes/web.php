<?php

use App\Http\Controllers\CampGearController;
use Illuminate\Support\Facades\Route;

// Redirect root to catalog
Route::get('/', [CampGearController::class, 'index'])->name('home');

// Catalog and Detail routes
Route::get('/camp-gears', [CampGearController::class, 'index'])->name('camp-gears.index');
Route::get('/camp-gears/{id}', [CampGearController::class, 'show'])->name('camp-gears.show');

