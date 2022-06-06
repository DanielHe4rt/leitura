<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class AuthController extends Controller
{

    public function viewLogin(): View
    {
        return view('auth.login');
    }
}
