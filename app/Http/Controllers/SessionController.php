<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    function index()
    {
        return view('administrator.login');
    }

    function login(Request $request)
    {
        $credentials = $request->validate([
            'email'    => ['required', 'email:dns'],
            'password' => 'required'
        ], [
            'email.required'    => 'Email wajib diisi.',
            'email.email'       => 'Email tidak valid.',
            'password.required' => 'Password wajib diisi.'
        ]);

        // $credentials['is_active'] = 1;

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if (Auth::user()->role_id === 1) {
                return redirect()->intended('dashboard/super-admin')->with('success', 'Anda berhasil masuk.');
            } elseif (Auth::user()->role_id === 2) {
                return redirect()->intended('dashboard/admin')->with('success', 'Anda berhasil masuk.');
            }
        } else {
            return redirect('/administrator')->with('error', 'Ada kesalahan saat masuk.');
        }
    }

    function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/administrator');
    }

    // function register()
    // {
    //     return view('auth.register');
    // }
}
