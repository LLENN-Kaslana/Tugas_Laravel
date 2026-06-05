<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    // Fungsi index() akan dijalankan saat route /profil dipanggil
    public function index()
    {
        // Menyiapkan array data biodata untuk dikirim ke View
        $dataBiodata = [
            'nama' => 'Alana "LLENN" Radit Audreansyah', // Mengisi data nama
            'kelas' => 'Software Development' // Mengisi data kelas
        ];

        // Memanggil view 'profil.blade.php' dan mengirimkan $dataBiodata ke dalamnya
        return view('p3.profil', $dataBiodata);
    }
}