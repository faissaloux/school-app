<?php

use App\Http\Controllers\BusController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ParentController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

Route::middleware(['web', 'guest'])->group(function() {
    Route::view('/', 'auth.login');
});
Auth::routes(['register' => false]);

Route::middleware(['web', 'auth', 'role:admin'])->group(function() {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::controller(TeacherController::class)->prefix('/teachers')->as('teachers.')->group(function() {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{teacher}', 'edit')->name('edit');
        Route::post('/update/{teacher}', 'update')->name('update');
        Route::post('/delete/{teacher}', 'delete')->name('delete');
    });

    Route::controller(ParentController::class)->prefix('/parents')->as('parents.')->group(function() {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{parent}', 'edit')->name('edit');
        Route::post('/update/{parent}', 'update')->name('update');
        Route::post('/delete/{parent}', 'delete')->name('delete');
    });

    Route::controller(BusController::class)->prefix('/buses')->as('buses.')->group(function() {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{bus}', 'edit')->name('edit');
        Route::post('/update/{bus}', 'update')->name('update');
        Route::post('/delete/{bus}', 'delete')->name('delete');
        Route::get('/students/{bus}', 'students')->name('students');
    });

    Route::controller(StudentController::class)->prefix('/students')->as('students.')->group(function() {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{student}', 'edit')->name('edit');
        Route::post('/update/{student}', 'update')->name('update');
        Route::post('/delete/{student}', 'delete')->name('delete');
    });
});
