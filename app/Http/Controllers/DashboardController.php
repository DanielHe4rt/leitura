<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class DashboardController extends Controller
{

    public function viewDashboard(): View
    {
        return view('dashboard2');
    }
}
