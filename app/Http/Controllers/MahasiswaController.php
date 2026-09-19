<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    //
    public function index()
    {
        $mahasiswa = [
            'nim' => '251011700223',
            'nama' => 'Muhammad Khoirul Suryanto',
            'prodi' => 'Sistem Informasi',
            'kampus' => 'Universitas Unpam',
            'email' => 'mkhoirulsuryanto@gmail.com',
            'status' => 'aktif',
        ];

        return view('mahasiswa', compact('mahasiswa'));
    }
}
