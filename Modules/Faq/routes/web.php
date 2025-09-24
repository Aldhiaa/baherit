<?php

use Illuminate\Support\Facades\Route;
use Modules\Faq\Http\Controllers\FaqController;

Route::get('/faq', [FaqController::class, 'index'])->name('faq');
