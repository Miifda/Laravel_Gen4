<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {
        // Data kelas yang akan dikirim ke view
        $data = [
            'nama_kelas' => 'Sistem Informasi - P3', // Silakan sesuaikan dengan kelasmu
            'wali_kelas' => 'Bpk Dr. Bayu Wibowo'     // Silakan ganti dengan nama dosen wali kelasmu
        ];

        // Memanggil view 'kelas' di dalam folder 'p3'
        return view('p3.kelas', $data);
    }
}