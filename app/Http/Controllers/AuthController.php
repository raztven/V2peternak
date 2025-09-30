<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function inreg()
    {
        return view('auth/register');
    }

    function resum(Request $request)
    {
        $cekus = User::where('email', $request->email)->first();
        if ($cekus) {
            return redirect('/register')->with('gares', 'email is already used');
        }
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);

        $user->save();

        return redirect('/login')->with('sureg', 'account registration was successful');
    }

    function inlog()
    {
        return view('auth/login');
    }

    function loginn(Request $request)
    {
        $data = $request->only('email', 'password');
        if (Auth::attempt($data)) {
            return redirect('/dashboard')->with('sulog', 'login successful');
        }
        return redirect('/login')->with('galog', 'Incorrect email or password');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/dashboard');
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
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
