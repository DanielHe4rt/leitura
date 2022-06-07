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

    public function viewNewAppointment(): View
    {
        return view('appointments.new');
    }

    public function viewAppointmentOptions(): View
    {
        return view('appointments.options');
    }

    public function viewNewExclusiveAppointment(): View
    {
        return view('appointments.new-exclusive');
    }

    public function viewNewMeeting(): View
    {
        return view('appointments.new-meeting');
    }

    public function viewNewModel(): View
    {
        return view('appointments.new-model');
    }
}
