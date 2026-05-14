<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// Language switcher
Route::get('/locale/{locale}', function (string $locale) {
    if (in_array($locale, ['fr', 'en'])) {
        session(['locale' => $locale]);
        cookie()->queue(cookie('locale', $locale, 60 * 24 * 365));
    }
    return redirect()->back();
})->name('locale.switch');

// Landing page
Route::get('/', [PageController::class, 'home'])->name('home');

// Pages statiques
Route::get('/demo', [PageController::class, 'demo'])->name('demo');
Route::get('/roadmap', [PageController::class, 'roadmap'])->name('roadmap');
Route::get('/mentions-legales', [PageController::class, 'mentionsLegales'])->name('mentions-legales');
Route::get('/cgu', [PageController::class, 'cgu'])->name('cgu');
Route::get('/cgv', [PageController::class, 'cgv'])->name('cgv');
Route::get('/confidentialite', [PageController::class, 'confidentialite'])->name('confidentialite');
Route::get('/rgpd', [PageController::class, 'rgpd'])->name('rgpd');

// Blog
Route::prefix('blog')->name('blog.')->group(function () {
    Route::get('/', [BlogController::class, 'index'])->name('index');
    Route::get('/{post:slug}', [BlogController::class, 'show'])->name('show');
});

// Sitemap
Route::get('/sitemap.xml', [PageController::class, 'sitemap'])->name('sitemap');
