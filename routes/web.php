<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    $user = auth()->user();
    return view('welcome', compact('user'));
})->name('home');

// Route for all users api.
Route::resource('users', UserController::class);

// Route user page info.
Route::get('/user/{id}', [UserController::class, 'showUserPage'])->name('user.show');
