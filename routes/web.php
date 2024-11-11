<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::post('createpost', action: [BeritaController::class, 'createpost'])->name('createpost');
    Route::get('/dashboard', action: [BeritaController::class, 'dashboard'])->name('dashboard');
});



require __DIR__.'/auth.php';
Route::get('/index', [HomeController::class, 'index'])->name('index');
Route::get('/statistik', [HomeController::class, 'statistik'])->name('statistik');
Route::get('/pemerintah', [HomeController::class, 'pemerintah'])->name('pemerintah');
Route::get('/layanan', [HomeController::class, 'layanan'])->name('layanan');
