<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function __construct()
    {
        // Apply 'guest' middleware to the show and login methods, and 'auth' middleware to logout
        $this->middleware('guest')->except('logout');
    }

    public function show()
    {
        return view('forms.login');
    }

    public function login(Request $request)
    {
        $incomingFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if (Auth::attempt($incomingFields)) {
            $request->session()->regenerate();

            // Check if the authenticated user is an admin
            if (Auth::user()->is_admin) {
                return redirect()->intended('/admin/dashboard');
            }
          
            // Regular user dashboard
            return redirect()->intended('/dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
