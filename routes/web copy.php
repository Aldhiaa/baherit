<?php

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
