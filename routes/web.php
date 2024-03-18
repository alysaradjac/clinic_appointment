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

Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
});

Route::get('/sucessful', function () {
    return view('forms.sucessful');
});

Route::get('/profile', function () {
    return view('dashboard.profile');
});

Route::get('/calendar', function () {
    return view('calendar');
});