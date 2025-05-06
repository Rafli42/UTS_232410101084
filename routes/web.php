<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;


Route::get('/login', [pageController::class, 'login'])->name('showlogin');
Route::post('/login', [pageController::class, 'loginStore'])->name('login');
Route::post('logout', [pageController::class, 'logout'])->name('logout');

Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
Route::get('/pengelolaan', [PageController::class, 'pengelolaan'])->name('pengelolaan');
Route::post('/tambah-barang', [PageController::class, 'tambahBarang'])->name('tambah.barang');

Route::get('/profile', [pageController::class, 'profile'])->name('profile');

