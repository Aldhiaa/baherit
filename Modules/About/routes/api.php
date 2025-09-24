<?php

use Illuminate\Support\Facades\Route;
use Modules\About\Http\Controllers\AboutController;

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('about', AboutController::class)->names('about');
});
