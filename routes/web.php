<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LogInController;
use App\Models\User;
use App\Models\DoctorSchedule;
use App\Http\Middleware\UserLogin;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AddDoctorController;
use App\Http\Controllers\DoctorScheduleController;
use App\Http\Middleware\AdminMiddleware;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});




Route::post('/login', [LogInController::class, 'login']);
Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');


Route::middleware([UserLogin::class])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    
    Route::get('/personnel', function () {
        return view('dashboard.personnel');
    });

    // Route::get('/appointment', function () {
    //     return view('dashboard.appointment');
    // });

    // Route::get('/appointment/form', function () {
    //     return view('dashboard.appointment_form');
    // });

    Route::get('/profile', function () {
        return view('dashboard.student_profile');
    });
});

Route::get('appointment', function () {
    return view('dashboard.appointment');
});

Route::get('/appointment/form', function () {
    return view('dashboard.appointment_form');
});

Route::get('/appointment/form1', function () {
    return view('dashboard.appoint_form1');
});

Route::get('/appointment/annual-form', function () {
    return view('dashboard.annual_form');
});

//Doctors routes

Route::get('/doctor_login', function () {
    return view('doctor.doctor_admin');
});

Route::get('/doctor_dashboard', function () {
    return view('doctor.doctor_dashboard');
});

Route::get('/doctor_appointment', function () {
    return view('doctor.doctor_appointment');
});

Route::get('/doctor_patient', function () {
    return view('doctor.doctor_patient');
});

Route::get('/doctor_history', function () {
    return view('doctor.doctor_history');
});

Route::get('/student_profile', function () {
    return view('doctor.student_profile');
});

Route::get('/remarks_form', function () {
    return view('doctor.remarks_form');
});

Route::get('/remarks', function () {
    return view('doctor.remarks');
});

Route::get('/doctor_appointment', function () {
    return view('doctor.appointment');
});

Route::get('/doctor_sched', function () {
    return view('doctor.doctor_form');
});


//Admin
Route::get('/admin_login', function () {
    return view('admin.admin_login');
});

Route::middleware(['admin'])->group(function () {
    Route::get('/admin_dashboard', function () {
        return view('admin.admin_dashboard');
    });
        Route::get('/admin_appointment', function () {
            return view('admin.admin_appointment');
        });

        Route::get('/admin_patient', function () {
            return view('admin.admin_patient');
        });

        Route::get('/admin_history', function () {
            return view('admin.admin_history');
        });

        // Route::get('/admin_schedule', function () {
        //     return view('admin.admin_schedule');
        // });

        // Route::get('/admin_sched', function () {
        //     return view('admin.admin_form');
        // });

        Route::get('/admin_view', function () {
            return view('admin.admin_view');
        });

    });

    Route::get('/doctor_schedule', function () {
        return view('admin.admin_schedule');
    });

    Route::post('admin/schedule', [DoctorScheduleController::class, 'store'])->name('admin_schedule.store');
    Route::get('/doctor/schedule/form', [DoctorScheduleController::class, 'index'])->name('admin_schedule.index');

    Route::get('/admin/doctors', [AddDoctorController::class, 'index'])->name('admin_doctor');
    Route::post('admin_doctor', [AddDoctorController::class, 'store'])->name('admin_doctor.store');