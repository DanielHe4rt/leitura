<?php

namespace App\Http\Controllers\Appointment;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class AppointmentsController extends Controller
{
    public function viewMyAppointments(): View
    {
        return view('appointments.list');
    }
}
