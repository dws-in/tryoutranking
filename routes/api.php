<?php

use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\API\TryoutAPIController;
use App\Http\Controllers\TryoutController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\API\ScoreController;

Route::post('register', [RegisterController::class, 'register']);
Route::post('login', [RegisterController::class, 'login']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->group(function () {
    //code here
    Route::apiResource('tryouts', TryoutAPIController::class);
  Route::apiResource('scores', ScoreController::class);

});
