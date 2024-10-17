<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;

// Route pour l'administration
Route::get('/admin', [AdminController::class, 'index'])->name('admin');

// Route d'accueil
Route::get('/', [HomeController::class, 'index'])->name('home');

// Route pour le tableau de bord
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Routes d'authentification
Route::middleware('guest')->group(function () {
    // Route pour l'inscription
    Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('/register', [RegisteredUserController::class, 'store']);
});

// Routes nécessitant une authentification
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


 // Routes pour les vidéos
 Route::get('/videos/viduo', [VideoController::class, 'index'])->name('videos.viduo');
 Route::get('/videos/create', [VideoController::class, 'create'])->name('videos.create');

// Autres routes
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/videos.viduo', function () {
    return view('videos.viduo');
});

Route::get('/videos.create', function () {
    return view('videos.create');
});

// Charge les routes d'authentification
require __DIR__.'/auth.php';
