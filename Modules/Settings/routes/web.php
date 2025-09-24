<?php

use Illuminate\Support\Facades\Route;
use Modules\Settings\Http\Controllers\SettingsController;

Route::get('/settings', [SettingsController::class, 'index'])->name('settings.index');