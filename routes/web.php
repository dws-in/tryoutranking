<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\TryoutController;
use App\Http\Controllers\ScoreController;
use App\Http\Controllers\SupportController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
  return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function() {
  return view('dashboard');
})->name('dashboard');

Route::group(['middleware' => 'auth'], function() {
  Route::resource('tryouts', TryoutController::class);
  Route::resource('support', SupportController::class);
  Route::resource('users', UserController::class);
});

// Route::middleware(['auth:sanctum', 'verified'])->group(function () {
//   Route::get('/dashboard', [TryoutController::class, 'index'])->name('dashboard');

//   Route::get('/tryout', [TryoutController::class, 'add']);
//   Route::post('/tryout', [TryoutController::class, 'create']);

//   Route::get('/tryout/{tryout}', [TryoutController::class, 'edit']);
//   Route::post('/tryout/{tryout}', [TryoutController::class, 'update']);

//   Route::get('/tryout/{tryout}/ranking', [ScoreController::class, 'index'])->name('ranking');
//   Route::get('/tryout/{tryout}/score', [ScoreController::class, 'add']);
//   Route::post('/tryout/{tryout}/score', [ScoreController::class, 'create']);

//   Route::get('/tryout/{tryout}/score/{score}', [ScoreController::class, 'edit']);
//   Route::post('/tryout/{tryout}/score/{score}', [ScoreController::class, 'update']);

//   Route::get('/support', [SupportController::class, 'add'])->name('support');
//   Route::post('/support', [SupportController::class, 'create']);
// });
