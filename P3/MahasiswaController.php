<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        // Data mahasiswa yang akan dikirim ke view
        $data = [
            'nama' => 'Muhammad Miftahul Huda', // Silakan ganti dengan nama aslimu
            'jurusan' => 'Sistem Informasi' // Silakan disesuaikan jika perlu
        ];

        // Memanggil view 'mahasiswa' di dalam folder 'p3'
        return view('p3.mahasiswa', $data);
    }
}