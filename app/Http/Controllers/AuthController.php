<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $user = Auth::user(); // <-- tambahkan ini

            if ($user->role === 'admin') {
                return redirect()->intended('admin/index');
            } elseif ($user->role === 'employee') {
                return redirect()->intended('employee/index');
            } else {
                Auth::logout();
                return back()->withErrors([
                    'username' => 'Role tidak dikenali.',
                ]);
            }
        }

        return back()->withErrors([
            'username' => 'Username atau password salah.',
        ])->withInput();
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}