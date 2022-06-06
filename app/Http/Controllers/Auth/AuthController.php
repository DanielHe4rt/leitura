<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthController extends Controller
{

    public function viewLogin(): View
    {
        return view('auth.login');
    }

    public function postLogin(LoginRequest $request)
    {
        $credentials = $request->validated();

        if (!Auth::attempt($credentials)) {
            return redirect()
                ->to('/')
                ->withErrors('error', 'deu merda');
        }

        return redirect()->to('/dashboard');
    }
}
