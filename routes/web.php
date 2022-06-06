<?php

use App\Http\Controllers\Appointment\AppointmentsController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardController;
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

Route::get('/', [AuthController::class, 'viewLogin']);
Route::post('/login', [AuthController::class, 'postLogin'])->name('auth.post-login');


Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'viewDashboard'])->name('dashboard');

    Route::get('/minhas-appointments', [AppointmentsController::class, 'viewMyAppointments'])->name('appointments.my-appointments');
});
