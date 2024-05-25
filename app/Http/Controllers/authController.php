<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class authController extends Controller
{
    public function loginPost(Request $request)
    {
        $check = $request->validate([
            'Username' => 'required',
            'Password' => 'required'
        ]);

        if (Auth::attempt($check)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }
        return back()->with('error', 'Login Failed. Username or Password is incorrect');
    }

    public function logout(Request $request)
    {
        Auth::logout($request);
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
