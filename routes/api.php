<?php


use App\Http\Controllers\CommentsController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\FilmsController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/test', [ShowController::class, 'show']);

// Films
Route::get('/films', [FilmsController::class, 'index'])->name('films.index');
Route::get('/films/{filmId}', [FilmsController::class, 'show'])->name('films.show');
Route::get('/films/{filmId}/similar', [FilmsController::class, 'showSimilar'])->name('films.similar');
Route::get('promo', [FilmsController::class, 'promo'])->name('films.promo');

//Favorites
Route::get('/favorite', [FavoriteController::class, 'index'])->name('favorite.index');
Route::post('/favorite/{filmId}/{status}', [FavoriteController::class, 'update'])->name('favorite.update');

//Comments
Route::get('/comments/{filmId}', [CommentsController::class, 'show'])->name('comments.show');
Route::post('/comments/{filmId}', [CommentsController::class, 'store'])->name('comments.store');

// User
Route::get('/login', [UserController::class, 'index'])->name('login.index');
Route::post('/login', [UserController::class, 'login'])->name('login.login');


require __DIR__.'/settings.php';
//require __DIR__.'/auth.php'; перебивает '/login'
