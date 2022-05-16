<?php

use App\Http\Controllers\BusController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ParentController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'auth.login');
Auth::routes(['register' => false]);

Route::middleware(['web', 'auth'])->group(function() {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::controller(TeacherController::class)->prefix('/teachers')->as('teachers.')->group(function() {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{teacher}', 'edit')->name('edit');
        Route::post('/update/{teacher}', 'update')->name('update');
    });

    Route::controller(ParentController::class)->prefix('/parents')->as('parents.')->group(function() {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{parent}', 'edit')->name('edit');
        Route::post('/update/{parent}', 'update')->name('update');
    });

    Route::controller(BusController::class)->prefix('/buses')->as('buses.')->group(function() {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
    });

    Route::controller(StudentController::class)->prefix('/students')->as('students.')->group(function() {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
    });
});
