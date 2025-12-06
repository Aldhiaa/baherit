<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PortfolioController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::get('/', function () {
    return redirect(LaravelLocalization::localizeURL('/'));
});

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'],
], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/about-us', [AboutController::class, 'index'])->name('about');
    Route::get('/services', [ServiceController::class, 'index'])->name('services');
    Route::get('/services/{slug}', [ServiceController::class, 'show'])->name('service.show');
    Route::get('/blog', [BlogController::class, 'index'])->name('blog');
    Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');
    Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');
    Route::get('/portfolio/{slug}', [PortfolioController::class, 'show'])->name('portfolio.show');
    Route::get('/contact-us', [ContactController::class, 'index'])->name('contact');
    Route::post('/contact-us', [ContactController::class, 'store'])->name('contact.store');
    Route::get('/faq', [FaqController::class, 'index'])->name('faq');
});



require __DIR__.'/auth.php';
