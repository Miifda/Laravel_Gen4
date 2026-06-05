<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        // Data biodata yang akan dikirim ke view
        $data = [
            'nama' => 'Nama Lengkap Kamu', // Silakan ganti dengan nama aslimu
            'kelas' => 'Kelas Kamu'        // Silakan ganti dengan kelasmu
        ];

        return view('p3.profil', $data);
    }
}