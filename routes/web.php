<?php

use Doctrine\DBAL\Schema\Index;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homecontroller;
use Modules\Blogs\app\Http\Controllers\FrontendBlogController;

Route::get('/', [HomeController::class, 'index'])->name('home');

// Public blog routes
Route::get('/blogs', [FrontendBlogController::class, 'index'])->name('blogs.index');
Route::get('/blogs/{slug}', [FrontendBlogController::class, 'show'])->name('blogs.show');
Route::post('/blogs/{post}/comment', [FrontendBlogController::class, 'comment'])->name('blogs.comment');
Route::post('/blogs/react/{type}/{post}', [FrontendBlogController::class, 'react'])->name('blogs.react');
