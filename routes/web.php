<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\AdminController;

Route::get(
    '/',
    [HomeController::class, 'index']
);

Route::get(
    '/booking',
    [BookingController::class, 'index']
);

Route::post(
    '/booking/store',
    [BookingController::class, 'store']
);

Route::get(
    '/admin/login',
    [AdminController::class, 'loginPage']
);

Route::post(
    '/admin/login',
    [AdminController::class, 'login']
);

Route::get(
    '/admin/dashboard',
    [AdminController::class, 'dashboard']
);

Route::get(
    '/admin/approve/{id}',
    [AdminController::class, 'approve']
);

Route::get(
    '/admin/reject/{id}',
    [AdminController::class, 'reject']
);

Route::get(
    '/admin/delete/{id}',
    [AdminController::class, 'delete']
);

Route::get(
    '/admin/logout',
    [AdminController::class, 'logout']
);