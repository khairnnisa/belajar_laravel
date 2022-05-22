<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('daftar', [
               'title' => 'Daftar',
               'active' => 'daftar'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users', 
            'password' => 'required|min:5|max:255',
            'profesi' => 'required|max:255',
            'gaji' => 'required',
            'umur' => 'required',
            'pengalamanKerja' => 'required',
            'deskripsi' => 'required'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);
        
        return redirect('/masuk')->with('success', 'Registration successfull! Please login');
    }
}
