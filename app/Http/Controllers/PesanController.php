<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesan;
use App\Models\dataPesanan;

class PesanController extends Controller
{
    public function index()
    {
        return view('pesan', [
               'title' => 'Pesan',
               'active' => 'pesan'
        ]);
    }
    public function store(Request $request)
    {
        $validateData=$request->validate([
            
            'nama' => 'required',
            'email' => 'required',
            'noTelepon' => 'required'
            
        ]);
        
        return redirect('/terimakasih')->with('Pemesanan berhasil! Terimakasih');
        

    }
}