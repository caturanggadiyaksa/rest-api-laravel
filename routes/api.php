<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\QuranController;
use App\Http\Controllers\API\AyatsController;
use App\Http\Controllers\JamController;
use App\Http\Controllers\AsmaulHusnaController;


Route::post('/register', [App\Http\Controllers\API\AuthController::class, 'register']);

Route::post('/login', [App\Http\Controllers\API\AuthController::class, 'login']);


Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/profile', function (Request $request) {
        return auth()->user();
    });
    Route::post('/logout', [App\Http\Controllers\API\AuthController::class, 'logout']);
});


Route::group(['middleware'], function () {
    Route::resource('/surah', QuranController::class);
    Route::get('/ayats/{surah_number}', [AyatsController::class, 'index']);
    Route::get('/jam', [JamController::class, 'getJam']);
    Route::get('/asmaulhusna', [AsmaulHusnaController::class, 'index']);
});
