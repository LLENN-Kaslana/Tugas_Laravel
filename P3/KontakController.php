<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index()
    {
        // Menyiapkan array data kontak untuk dikirim ke View
        $dataKontak = [
            'email' => 'alana.llenn@example.com', // Mengisi data email
            'nomor_hp' => '081234567890' // Mengisi data nomor HP
        ];

        // Memanggil view 'kontak.blade.php' dan mengirimkan $dataKontak ke dalamnya
        return view('p3.kontak', $dataKontak);
    }
}