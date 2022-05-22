<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('masuk', [
            'title' => 'Masuk'
        ]);
    }

    public function authenticate(Request $request)
    {
        $credential = $request -> validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);
        
        if(Auth::attempt($credential)){
            $request->session()->regenerate();

            return redirect()->intended('/profil');
        }

        return back()->with('error', 'Email atau password salah');
    }

    public function keluar(Request $request)
    {
        Auth::keluar();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
