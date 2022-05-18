<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\TeacherController;
use App\Http\Controllers\Api\TripStatusController;
use Illuminate\Support\Facades\Route;

Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::middleware('auth:sanctum')->group(function () {
    Route::controller(AuthController::class)->group(function() {
        Route::post('/logout', 'logout')->name('logout');
        Route::get('/profile', 'profile')->name('profile');
    });

    Route::middleware(['role:teacher'])->group(function() {
        Route::controller(TeacherController::class)->group(function() {
            Route::get('/get-buses', 'getBuses')->name('get_buses');
            Route::get('/get-bus-students/{bus}', 'getBusStudents')->name('get_bus_students');
        });

        Route::controller(TripStatusController::class)->prefix('/trip-status')->as('trip_status.')->group(function() {
            Route::post('/start/{bus}', 'start')->name('start');
            Route::post('/store', 'store')->name('store');
        });
    });
});

Route::fallback(function(){
    return response()->errorMessage(trans('responses.errors.not_found'));
});
