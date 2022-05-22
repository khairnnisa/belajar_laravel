<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dataPesanan;

class PesananController extends Controller
{
    public function index()
    {
        return view('pesanan',[
            'title' => 'Pesanan',
            'active' => 'pesan',
            'post' => dataPesanan::all()]);
    }

}
