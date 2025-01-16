<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AppController;

// Authenticate password 
Route::get('/', [AppController::class, 'passwordShow']);
Route::post('check-password', [AppController::class, 'checkPassword'])->name('check.password'); 
// Get All Jokes
Route::get("/jokes", [AppController::class, "getRandomJokes"]);
Route::get("refresh-jokes", [AppController::class, "getRandomOnRefreshJokes"]);
