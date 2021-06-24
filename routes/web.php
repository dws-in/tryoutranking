<?php

use App\Http\Controllers\myTryoutController;
use App\Http\Controllers\MyTryOutController as ControllersMyTryOutController;
use App\Http\Controllers\ParticipantController;
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
    Route::resource('myTryout', MyTryOutController::class);
    //Route::resource('scores', ScoreController::class);
    Route::resource('participant', ParticipantController::class);

    Route::prefix('register-to')->name('register-to.')->group(function () {
        Route::get('/create/{id}', [RegisterTOController::class, 'create'])->name('create');
        Route::post('/store/{id}', [RegisterTOController::class, 'store'])->name('store');
    });

    Route::prefix('scores')->name('scores.')->group(function () {
        Route::get('/{id}', [ScoreController::class, 'index'])->name('index');
        Route::get('/add/{id}', [ScoreController::class, 'add'])->name('add');
        Route::post('/creat/{id}', [ScoreController::class, 'create'])->name('create');
    });
});

//Route::get('/register-to/{$id}', [RegisterTOController::class, 'store'])->name('anjay');

