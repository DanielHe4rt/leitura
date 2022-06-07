<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthController extends Controller
{

    public function viewLogin(): View|RedirectResponse
    {
        if (Auth::check()) {
            return redirect()->route('dashboard');
        }

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

    public function getLogout(): RedirectResponse
    {
        if (Auth::check()) {
            Auth::logout();
        }
        return redirect()->route('login');
    }
}
