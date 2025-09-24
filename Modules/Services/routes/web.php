<?php

use Illuminate\Support\Facades\Route;
use Modules\Services\app\Http\Controllers\ServicesController;

Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::get('/services/{slug}', [ServicesController::class, 'show'])->name('services.show');
