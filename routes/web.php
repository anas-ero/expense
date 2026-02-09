<?php

use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $expenses = auth()->user()->expenses;
    return view('dashboard' , compact('expenses'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/expenses/create', [ExpenseController::class, 'create'])->name('create_form');
    Route::post('/expenses', [ExpenseController::class, 'store']);
    });
    


require __DIR__.'/auth.php';
