<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\User\TahfidzController;

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

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'store'])->middleware('guest');
Route::post('/logout', [LoginController::class, 'destroy'])->middleware('auth');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index')->middleware('auth');

Route::prefix('u')->middleware('auth')->group(function() {
    Route::get('hafalan-quran/juz', [TahfidzController::class, 'juz'])->name('hafalan-quran.juz')->middleware('role:user');
    Route::get('hafalan-quran/juz/{juz}', [TahfidzController::class, 'surah_per_juz'])->name('hafalan-quran.surah_per_juz')->middleware('role:user');
    Route::get('hafalan-quran/surah', [TahfidzController::class, 'surah'])->name('hafalan-quran.surah')->middleware('role:user');
    Route::get('hafalan-quran/surah/{surah}', [TahfidzController::class, 'ayat_per_surah'])->name('hafalan-quran.ayat_per_surah')->middleware('role:user');
});