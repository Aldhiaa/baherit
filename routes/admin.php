<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\FaqCategoryController;
use App\Http\Controllers\Admin\FaqController as AdminFaqController;
use App\Http\Controllers\Admin\BlogController as AdminBlogController;
use App\Http\Controllers\Admin\CounterController as AdminCounterController;
use App\Http\Controllers\Admin\WorkingProcessController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\PageController;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application.
| These routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group.
|
*/

// Admin Authentication Routes (Guest Only)
Route::middleware('guest:admin')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

// Admin Protected Routes
Route::middleware(['admin.auth'])->prefix('admin')->name('admin.')->group(function () {
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    // Logout
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    
    // Services Management
    Route::resource('services', \App\Http\Controllers\Admin\ServiceController::class);
    
    // Testimonials Management
    Route::resource('testimonials', \App\Http\Controllers\Admin\TestimonialController::class);

    // Blog Management
    Route::resource('blogs', AdminBlogController::class)->except(['show']);

    // Counter Management
    Route::resource('counters', AdminCounterController::class)->except(['show']);

    // FAQ Categories Management
    Route::resource('faq-categories', FaqCategoryController::class)->except(['show']);

    // FAQs Management
    Route::resource('faqs', AdminFaqController::class)->except(['show']);

    // Working Processes Management
    Route::resource('working-processes', WorkingProcessController::class)->except(['show']);
    
    // Projects Management
    Route::resource('projects', ProjectController::class)->except(['show']);
    
    // Banners Management
    Route::resource('banners', BannerController::class)->except(['show']);
    
    // Pages Management
    Route::resource('pages', PageController::class)->except(['show']);
    
    // Settings
    Route::get('settings', [SettingController::class, 'index'])->name('settings.index');
    Route::put('settings', [SettingController::class, 'update'])->name('settings.update');
    
    // Admin Users Management
    Route::resource('admin-users', AdminUserController::class)->except(['show']);
    
    // Roles & Permissions Management
    Route::resource('roles', RoleController::class)->except(['show']);
});
