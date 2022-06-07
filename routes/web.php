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

Route::get('/', [AuthController::class, 'viewLogin'])->name('login');
Route::post('/login', [AuthController::class, 'postLogin'])->name('auth.post-login');
Route::get('/logout', [AuthController::class, 'getLogout'])->name('logout');


Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'viewDashboard'])->name('dashboard');

    Route::prefix('/solicitacoes')->group(function () {
        Route::get('/', [AppointmentsController::class, 'viewAppointmentOptions'])->name('appointments-type');
        Route::get('/minhas-consultas', [AppointmentsController::class, 'viewMyAppointments'])->name('appointments.my-appointments');

        Route::get('/nova-exclusiva', [AppointmentsController::class, 'viewNewExclusiveAppointment'])->name('appointments.new-exclusive');
        Route::get('/nova-consulta', [AppointmentsController::class, 'viewNewAppointment'])->name('appointments.new-appointment');
        Route::get('/nova-reuniao', [AppointmentsController::class, 'viewNewMeeting'])->name('appointments.new-meeting');
        Route::get('/novo-modelo', [AppointmentsController::class, 'viewNewModel'])->name('appointments.new-model');
    });
});
