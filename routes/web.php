<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LogInController;
use App\Models\User;
use App\Models\DoctorSchedule;
use App\Models\Doctor;
use App\Models\Remarks;
use App\Http\Middleware\UserLogin;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AddDoctorController;
use App\Http\Controllers\DoctorScheduleController;
use App\Http\Controllers\UserAppointmentController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\RemarksController;
use App\Http\Middleware\EnsureDoctorIsAuthenticated;


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

    Route::get('appointment', function () {
        return view('dashboard.appointment');
    });
    
    Route::get('/appointment/form', [UserAppointmentController::class, 'index'])->name('appointments.index');
    Route::get('/appointment/form1', [UserAppointmentController::class, 'showForm'])->name('appointments.showForm');
    Route::get('/appointment/form2', [UserAppointmentController::class, 'showForm2'])->name('appointments.showForm2');
    Route::get('/appointment/form3', [UserAppointmentController::class, 'showForm3'])->name('appointments.showForm3');
    Route::get('/appointment/form4', [UserAppointmentController::class, 'showForm4'])->name('appointments.showForm4');
    Route::get('/appointment/form5', [UserAppointmentController::class, 'showForm5'])->name('appointments.showForm5');
    
    Route::get('/appointment/annual-form', [UserAppointmentController::class, 'annual'])->name('appointments.annual');
    Route::get('/appointment/annual-form1', [UserAppointmentController::class, 'annual1'])->name('appointments.annual1');
    Route::get('/appointment/annual-form2', [UserAppointmentController::class, 'annual2'])->name('appointments.annual2');
    Route::get('/appointment/annual-form3', [UserAppointmentController::class, 'annual3'])->name('appointments.annual3');
    Route::get('/appointment/annual-form4', [UserAppointmentController::class, 'annual4'])->name('appointments.annual4');
    Route::get('/appointment/annual-form5', [UserAppointmentController::class, 'annual5'])->name('appointments.annual5');
    
    Route::post('/appointments', [UserAppointmentController::class, 'store'])->name('appointments.store');

    Route::get('/profile', [RegisterController::class, 'studentProfile']);
});


//Doctors routes

Route::post('/doctor/logins', [AddDoctorController::class, 'login'])->name('doctor.logins');
Route::get('/doctor/login', function () {
    return view('doctor.doctor_admin');
});


Route::group(['middleware' => ['doctor.auth']], function () {
    Route::get('/doctor/dashboard', [UserAppointmentController::class, 'doctorview'])->name('doctor.dashboard');
    Route::get('/doctor/view/{id}', [UserAppointmentController::class, 'doctor'])->name('doctor.view');
    Route::get('/doctor/remarks-form', [RemarksController::class, 'index'])->name('remarks.view');
    Route::post('/doctor/remarks', [RemarksController::class, 'store'])->name('remarks.store');
    Route::get('/doctor/remark/{id}', [RemarksController::class, 'remark']);
    Route::post('/doctor/{id}/finish', [UserAppointmentController::class, 'markAsFinished'])->name('appointments.finish');
    Route::get('/doctor/history', [UserAppointmentController::class, 'fetchFinished'])->name('appointments.finished');
});

Route::get('/remarks/form', function () {
    return view('doctor.remarks_form');
});


Route::get('/doctor_appointment', function () {
    return view('doctor.doctor_appointment');
});

Route::get('/doctor_patient', function () {
    return view('doctor.doctor_patient');
});

Route::get('/student_profile', function () {
    return view('doctor.student_profile');
});

Route::get('/remarks/form', function () {
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


    Route::get('/doctor_schedule', function () {
        return view('admin.admin_schedule');
    });

    Route::get('/admin/dashboard', [UserAppointmentController::class, 'fetch'])->name('appointments');
    Route::get('/admin/history', [UserAppointmentController::class, 'adminhistory'])->name('appointmen');
    Route::post('/admin/dashboard', [LogInController::class, 'login'])->name('appointments.fetch');

    Route::get('/admin/view/{id}', [UserAppointmentController::class, 'view'])->name('appointment');

    Route::get('/fetch-data/appointment_form/{id}', [UserAppointmentController::class, 'fetchAppointmentForm']);
    Route::get('/fetch/medical_record', [RegisterController::class, 'fetchMedicalRecord']);
    Route::get('/fetch/appointment_history', [UserAppointmentController::class, 'fetchAppointmentHistory']);



    Route::get('/admin_history', function () {
        return view('admin.admin_history');
    });

        Route::get('/admin/appointment', function () {
            return view('admin.admin_appointment');
        });



    Route::post('admin/schedule', [DoctorScheduleController::class, 'store'])->name('admin_schedule.store');
    Route::get('/doctor/schedule/form', [DoctorScheduleController::class, 'index'])->name('admin_schedule.index');

    Route::get('/admin/doctors', [AddDoctorController::class, 'index'])->name('admin_doctor');
    Route::get('delete/{id}', [AddDoctorController::class, 'delete'])->name('admin_delete');
    Route::post('admin/doctor', [AddDoctorController::class, 'store'])->name('admin_doctor.store');