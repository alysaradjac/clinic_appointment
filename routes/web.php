<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LogInController;
use App\Models\User;
use App\Http\Middleware\UserLogin;

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




Route::post('/login', [LogInController::class, 'login'])->name('login');
Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
})->middleware('userLogin');

Route::get('/register', [RegisterController::class, 'index'])->name('register');

Route::post('/register', [RegisterController::class, 'store'])->name('register.store');





// Route::get('/sucessful', function () {
//     return view('forms.sucessful');
// });

//User

Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
});

Route::get('/personnel', function () {
    return view('dashboard.personnel');
});

Route::get('/appointment', function () {
    return view('dashboard.appointment');
});

Route::get('/appointment_form', function () {
    return view('dashboard.appointment_form');
});

Route::get('/profile', function () {
    return view('dashboard.student_profile');
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

Route::get('/admin_schedule', function () {
    return view('admin.admin_schedule');
});

Route::get('/admin_view', function () {
    return view('admin.admin_view');
});

Route::get('/admin_schedule', function () {
    return view('admin.admin_schedule');
});

Route::get('/admin_doctor', function () {
    return view('admin.admin_doctor');
});

Route::get('/admin_sched', function () {
    return view('admin.admin_form');
});