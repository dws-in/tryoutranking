<?php

use App\Http\Controllers\myTryoutController;
use App\Http\Controllers\QRController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterTOController;
use App\Http\Controllers\RekomendasiController;
use App\Http\Controllers\TryoutController;
use App\Http\Controllers\ScoreController;
use App\Http\Controllers\SupportController;
use App\Http\Controllers\UserController;
use App\Models\RegisterTO;

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
    Route::resource('rekomendasi', RekomendasiController::class);
    Route::resource('myTryout', myTryoutController::class);
//   Route::resource('register-to', RegisterTOController::class)->parameters([
//       'create' => 'id',
//   ]);
//   ->except(['store'])
//;
    Route::prefix('register-to')->name('register-to.')->group(function () {
        Route::get('/create/{id}', [RegisterTOController::class, 'create'])->name('create');
        Route::post('/store/{id}', [RegisterTOController::class, 'store'])->name('store');
    });
});

//Route::get('/register-to/{$id}', [RegisterTOController::class, 'store'])->name('anjay');

