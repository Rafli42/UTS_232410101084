<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;


Route::get('/login', [pageController::class, 'login'])->name('showlogin');
Route::post('/login', [pageController::class, 'loginStore'])->name('login');

Route::get('/dashboard/{id}', [PageController::class, 'dashboard'])->name('dashboard');
Route::get('/pengelolaan/{id}', [PageController::class, 'pengelolaan'])->name('pengelolaan');
Route::get('/profile/{id}', [PageController::class, 'showprofile'])->name('profile');

