<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'auth.login');
Auth::routes(['register' => false]);

Route::get('/home', [HomeController::class, 'index'])->name('home');
