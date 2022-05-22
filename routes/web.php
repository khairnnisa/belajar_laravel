<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\PesananController;
use App\Models\Pesan;
use App\Models\dataPesanan;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/art', function () {
    return view('art', [
        "title" => "Art"
    ]);
});

Route::get('/baby_sitter', function () {
    return view('baby_sitter', [
        "title" => "Baby Sitter"
    ]);
});

Route::get('/perawat_lansia', function () {
    return view('perawat_lansia', [
        "title" => "Perawat Lansia"
    ]);
});

Route::get('/daftar', function () {
    return view('daftar', [
        "title" => "Daftar"
    ]);
});

Route::get('/profil', function () {
    return view('profil', [
        "title" => "Profil"
    ]);
});


Route::get('/masuk', function () {
    return view('masuk', [
        "title" => "Masuk"
    ]);
});

Route::get('/pesan', function () {
    return view('pesan', [
        "title" => "Pesan"
    ]);
});

Route::get('/terimakasih', function () {
    return view('terimakasih', [
        "title" => "Terimakasih"
    ]);
});

Route::get('/pesanan', function () {
    return view('pesanan', [
        "title" => "Pesanan"
    ]);
});

Route::get('/masuk', [LoginController::class, 'index']);
Route::post('/masuk', [LoginController::class, 'authenticate']);
Route::post('/', [LoginController::class, 'keluar']);

Route::get('/daftar', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/daftar', [RegisterController::class, 'store']);

Route::post('/pesan', [PesanController::class, 'store']);

Route::get('/pesanan', [App\Http\Controllers\PesananController::class, 'index']);