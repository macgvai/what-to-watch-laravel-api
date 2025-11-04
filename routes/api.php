<?php


use App\Http\Controllers\ShowController;
use Illuminate\Support\Facades\Route;


Route::get('/test', [ShowController::class, 'show']);


require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
