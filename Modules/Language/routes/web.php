<?php

use Illuminate\Support\Facades\Route;
use Modules\Language\Http\Controllers\LanguageController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('language', LanguageController::class)->names('language');
});


Route::get('/switch-language/{locale}', function ($locale) {
    // Store chosen locale in session
    session(['locale' => $locale]);

    // Let Laravel know about it
    app()->setLocale($locale);

    // Redirect back
    return redirect()->back();
})->name('switch.language');
