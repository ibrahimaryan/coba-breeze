<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/film', [FilmController::class, 'index'])->name('film.index');
    Route::get('/film/create', [FilmController::class, 'create'])->name('film.create');
    Route::post('/film/create', [FilmController::class, 'store'])->name('film.store');
    Route::get('/film/{id}', [FilmController::class, 'edit'])->name('film.edit');
    Route::patch('/film/{id}', [FilmController::class, 'update'])->name('film.update');
    Route::delete('/film/{id}', [FilmController::class, 'destroy'])->name('film.destroy');
});

require __DIR__.'/auth.php';
