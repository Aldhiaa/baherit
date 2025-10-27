<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ServiceController as AdminServiceController;
use App\Http\Controllers\Admin\CaseStudyController as AdminCaseStudyController;
use App\Http\Controllers\Admin\TeamMemberController as AdminTeamMemberController;
use App\Http\Controllers\Admin\TechnologyController as AdminTechnologyController;
use App\Http\Controllers\Admin\AboutSectionController as AdminAboutSectionController;
use App\Http\Controllers\Admin\ServicePageController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CaseStudyController;
use App\Http\Controllers\TeamMemberController;
use App\Http\Controllers\TechnologyController;
use App\Http\Controllers\ContactSubmissionController;


Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localize', 'localizationRedirect', 'localeSessionRedirect']], function() {
    Route::get('/', function () {
        return view('homepage');
    })->name('home');

    Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
    Route::get('/services/category/{category}', [ServiceController::class, 'getByCategory']);

    Route::get('/case-studies', [CaseStudyController::class, 'index'])->name('case-studies.index');
    Route::get('/case-studies/industry/{industry}', [CaseStudyController::class, 'getByIndustry']);
    Route::get('/case-studies/{caseStudy}', [CaseStudyController::class, 'show'])->name('case-studies.show');

    Route::get('/technology-stack', [TechnologyController::class, 'index'])->name('technology-stack.index');
    Route::get('/technology-stack/category/{category}', [TechnologyController::class, 'getByCategory']);

    Route::get('/about', [TeamMemberController::class, 'index'])->name('about.index');

    Route::post('/contact', [ContactSubmissionController::class, 'store'])->name('contact.store');

    Route::get('/contact', function () {
        return view('contact');
    })->name('contact.index');

   
});

// Admin routes
Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Resource routes for admin panel
    Route::resource('services', AdminServiceController::class);
    Route::resource('case-studies', AdminCaseStudyController::class);
    Route::resource('team-members', AdminTeamMemberController::class);
    Route::resource('technologies', AdminTechnologyController::class);
    Route::resource('about-sections', AdminAboutSectionController::class);
    Route::resource('service-pages', ServicePageController::class);

    // Settings routes
    Route::get('/settings', [\App\Http\Controllers\Admin\SettingController::class, 'index'])->name('settings.index');
    Route::post('/settings', [\App\Http\Controllers\Admin\SettingController::class, 'update'])->name('settings.update');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
