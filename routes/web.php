<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'auth.login');
Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
