<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\GameResultController;
use App\Http\Controllers\GameStatisticController;
use App\Http\Controllers\GameFavoriteController;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/', function () {
        return view('games.index');
    })->name('home');
    Route::get('/math', function () {
        return view('games.game-site',  ['game' => 2]);
    })->name('games-site');
    Route::get('/slowa', function () {
        return view('games.game-site',  ['game' => 1]);
    })->name('games-site');
    Route::get('/wordle', function () {
        return view('games.game-site',  ['game' => 3]);
    })->name('games-site');
    
    Route::resource('games', GameController::class);
    Route::resource('game_results', GameResultController::class);
    Route::resource('game_statistics', GameStatisticController::class);
    Route::resource('favorites', GameFavoriteController::class);
});



require __DIR__.'/auth.php';
