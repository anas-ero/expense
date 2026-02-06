<?php

use App\Http\Controllers\UserController;

use App\Http\Controllers\WelcomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/profile', function (Request $request) {
    return $request->user();
});


Route::get('user/{id}', [UserController::class, 'CheckUser']);

