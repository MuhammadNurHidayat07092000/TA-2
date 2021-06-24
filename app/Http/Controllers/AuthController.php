<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Hash;
use Illuminate\Support\Facades\Session;
use App\Admin;

class AuthController extends Controller
{
    public function formLogin()
    {
        if (Auth::check()) {
            return redirect()->route('home');
        }
        return view('auth/login');
    }

    public function login(Request $request)
    {
        if (Auth::attempt([
            'username' => $request->username,
            'password' => $request->password
        ])) {
            return redirect('home');
        }
        return redirect('auths')->with('message', 'Username atau Password salah!');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('auths');
    }
}
