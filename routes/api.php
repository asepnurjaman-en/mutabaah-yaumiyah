<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\JuzController;
use App\Http\Controllers\Api\AyatController;
use App\Http\Controllers\Api\SurahController;
use App\Http\Controllers\Api\ActivityController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// Activity
Route::apiResource('/aktifitas', ActivityController::class);
// Tahfidz
Route::apiResource('/juz', JuzController::class);
Route::apiResource('/surah', SurahController::class);
Route::apiResource('/ayat', AyatController::class);
