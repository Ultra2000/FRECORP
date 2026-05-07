<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// Landing page
Route::get('/', [PageController::class, 'home'])->name('home');

// Pages statiques
Route::get('/demo', [PageController::class, 'demo'])->name('demo');
Route::get('/roadmap', [PageController::class, 'roadmap'])->name('roadmap');
Route::get('/mentions-legales', [PageController::class, 'mentionsLegales'])->name('mentions-legales');
Route::get('/cgu', [PageController::class, 'cgu'])->name('cgu');
Route::get('/confidentialite', [PageController::class, 'confidentialite'])->name('confidentialite');
Route::get('/rgpd', [PageController::class, 'rgpd'])->name('rgpd');

// Blog
Route::prefix('blog')->name('blog.')->group(function () {
    Route::get('/', [BlogController::class, 'index'])->name('index');
    Route::get('/{post:slug}', [BlogController::class, 'show'])->name('show');
});

// Sitemap
Route::get('/sitemap.xml', [PageController::class, 'sitemap'])->name('sitemap');
