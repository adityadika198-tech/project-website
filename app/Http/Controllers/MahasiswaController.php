<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    //
    public function index()
    {
        $mahasiswa = [
            'nim' => '251011700180',
            'nama' => 'Dhieka Aditya',
            'prodi' => 'Sistem Informasi',
            'kampus' => 'Universitas Unpam',
            'email' => 'adityadika198@gmail.com',
            'status' => 'Aktif',
        ];

        return view('page.profile', compact('mahasiswa'));
    }
}
