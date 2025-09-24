<?php

use Illuminate\Support\Facades\Route;
use Modules\Projects\app\Http\Controllers\ProjectsController;

Route::get('/projects', [ProjectsController::class, 'index'])->name('projects');
Route::get('/project/{slug}', [ProjectsController::class, 'show'])->name('project.show');
Route::get('/project-category/{slug}', [ProjectsController::class, 'byCategory'])->name('projects.category');
