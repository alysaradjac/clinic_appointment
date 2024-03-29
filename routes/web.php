<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/login', function () {
    return view('forms.login');
});

Route::get('/register', function () {
    return view('forms.register');
});

Route::get('/sucessful', function () {
    return view('forms.sucessful');
});

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