<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\EnsureUserHasRole;
use App\Http\Middleware\CheckUserHasRole;
use App\Http\Middleware\AdminLogout;
use App\Http\Middleware\PreventRegister;
use Illuminate\Support\Facades\Route;

Route::get('/', [LoginController::class, 'index'])->middleware([EnsureUserHasRole::class, AdminLogout::class]);

Route::post('/login', [UserController::class, 'login']);

Route::post('/logout', [UserController::class, 'logout']);

Route::get('/setup', function () {
    return view('setup');
})->middleware(CheckUserHasRole::class);

Route::post('/setup', [UserController::class, 'setup']);

Route::get('/register', function () {
    return view('register');
})->middleware(PreventRegister::class);

Route::post('/register', [UserController::class, 'register']);

Route::middleware(['logged-in'])->group(function () {
    Route::middleware(['user'])->group(function () {
            Route::get('/appointment', function () {
                return view('user.appointment');
            });
            Route::get('/appointment_form', function () {
                return view('user.appointment_form');
            });
            Route::get('/personnel', function () {
                return view('user.personnel');
            });
            
        });
       
        
    

    Route::middleware(['admin'])->group(function () {
        Route::get('/administrator', function () {
            return view('admin.admin');
        });
        Route::get('/admin_appointment', function () {
            return view('admin.admin_appointment');
        });
        Route::get('/admin_schedule', function () {
            return view('admin.admin_schedule');
        });
    });
});

