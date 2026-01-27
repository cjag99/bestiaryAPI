<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\BestiaryController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/bestiaries', [BestiaryController::class, 'index']);
    Route::get('/bestiaries/{id}', [BestiaryController::class, 'show']);

    Route::post('/bestiaries', [BestiaryController::class, 'store']);
    Route::put('/bestiaries/{id}', [BestiaryController::class, 'update']);
    Route::delete('/bestiaries/{id}', [BestiaryController::class, 'destroy']);
});
Route::get('/users', [ApiController::class, 'users']);
Route::post('/login', [ApiController::class, 'login']);
