<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ComputerBasicsController;
use Illuminate\Support\Facades\Route;

// Route pour l'administration
Route::get('/admin', [AdminController::class, 'index'])->name('admin');
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
// Routes pour les vues
Route::get('/ordinateur/computer-tutorials', function () {
    return view('ordinateur.computer-tutorials'); 
})->name('computer-tutorials');

Route::get('/ordinateur/file-management', function () {
    return view('ordinateur.file-management'); 
})->name('file-management');

Route::get('/ordinateur/create', function () {
    return view('ordinateur.create'); 
})->name('create');

// Routes pour les vidéos
Route::get('/ordinateur/computer-tutorials', [ComputerBasicsController::class, 'tutorials'])->name('computer-tutorials');
Route::get('/ordinateur/file-management', [ComputerBasicsController::class, 'fileManagement'])->name('file-management');
Route::post('/create', [ComputerBasicsController::class, 'store'])->name('create.store');


// Autres routes de redirection
Route::get('/welcome', function () {
    return view('welcome');
});

// Charge les routes d'authentification
require __DIR__.'/auth.php';
