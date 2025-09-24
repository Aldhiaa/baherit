<?php

use Illuminate\Support\Facades\Route;
use Modules\About\app\Http\Controllers\AboutController;

Route::get('/about-us', [AboutController::class, 'index'])->name('about.index');
