<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        // Menyiapkan array data produk untuk dikirim ke View
        $dataProduk = [
            'nama_produk' => 'Lisensi Unreal Engine / C++', // Mengisi data nama produk
            'harga' => 'Rp 7500.000' // Mengisi data harga
        ];

        // Memanggil view 'produk.blade.php' dan mengirimkan $dataProduk ke dalamnya
        return view('p3.produk', $dataProduk);
    }
}