<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('games.index');
})->name('games.index');

Route::get('/gra1', function () {
    return view('games.game-site');
})->name('games.game1');

Route::get('/favorites-games', function () {
    return view('games.favorites-games');
})->name('games.favourites-games');

Route::get('/games', function () {
    return view('games.all-games');
})->name('games.all-games');

Route::get('/leaderboards', function () {
    return view('games.leaderboards');
})->name('games.leaderboards');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
