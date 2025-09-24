<?php

use Illuminate\Support\Facades\Route;
use Modules\Blogs\Http\Controllers\BlogsController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('blogs', BlogsController::class)->names('blogs');
});
