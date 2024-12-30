<?php

use App\Http\Controllers\NoiseDataController;
use App\Http\Controllers\BuzzerControlController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Noise post
Route::post('/noise', [NoiseDataController::class, 'store']);
Route::get('/noise', [NoiseDataController::class, 'index']);

// Buzzer
Route::post('/buzzer', [BuzzerControlController::class, 'update']);
Route::get('/buzzer', [BuzzerControlController::class, 'index']);