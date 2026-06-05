<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SantriController;

//Tugas P3
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KontakController;

Route::get('/', function () {
    return view('welcome');
});


//Route dengan value
Route::get('/hello', function () {
    return "Hello World!";
});


//Rote dengan parameter
Route::get('/pegawai/{nama}/{divisi}', function ($nama, $divisi) {
    return 'Nama Pegawai : '.$nama.'<br/>Departemen : '.$divisi;
});


//Route redirect views
Route::get('/kabar', function () {
    return view('p3.kondisi');
});


//Route to UserController
Route::get("/user", [UserController::class, 'index']);


//Route to SantriController
Route::get("/santri", [SantriController::class, 'dataSantri']);



//Tugas P3
// Route untuk Halaman Profil
// Ketika URL /profil diakses, jalankan fungsi 'index' di dalam ProfilController
Route::get('/profil', [ProfilController::class, 'index']);

// Route untuk Halaman Produk
// Ketika URL /produk diakses, jalankan fungsi 'index' di dalam ProdukController
Route::get('/produk', [ProdukController::class, 'index']);

// Route untuk Halaman Kontak
// Ketika URL /kontak diakses, jalankan fungsi 'index' di dalam KontakController
Route::get('/kontak', [KontakController::class, 'index']);