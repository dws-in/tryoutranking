<?php

use App\Http\Controllers\myTryoutController;
use App\Http\Controllers\MyTryOutController as ControllersMyTryOutController;
use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\QRController;
use App\Http\Controllers\RankingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterTryoutController;
use App\Http\Controllers\RekomendasiController;
use App\Http\Controllers\TryoutController;
use App\Http\Controllers\ScoreController;
use App\Http\Controllers\SupportController;
use App\Http\Controllers\UserController;
use App\Models\RegisterTryout;

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
    Route::resource('myTryout', MyTryOutController::class);
    Route::resource('scores', ScoreController::class);
    Route::resource('participant', ParticipantController::class);
    Route::resource('ranking', RankingController::class);

    Route::prefix('register-to')->name('register-to.')->group(function () {
        Route::get('/create/{id}', [RegisterTryoutController::class, 'create'])->name('create');
        Route::post('/store/{id}', [RegisterTryoutController::class, 'store'])->name('store');
        Route::get('/show/{id}', [RegisterTryoutController::class, 'show'])->name('show');
    });
    Route::prefix('myTryout')->name('myTryout.')->group(function () {
         Route::get('/download/{id}', [MyTryOutController::class, 'download'])->name('download');
    });
});

