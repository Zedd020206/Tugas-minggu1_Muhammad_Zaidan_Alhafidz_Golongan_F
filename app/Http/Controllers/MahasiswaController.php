<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        // Mengambil data pertama dari database (contoh)
        // Atau bisa tetap menggunakan data statis seperti sebelumnya
        $data = [
            'nama' => 'Muhammmad Zaidan Alhafidz',
            'nim' => 'E41242150',
            'prodi' => 'Teknik Informatika',
            'kampus' => 'Politeknik Negeri Jember'
        ];

        return view('biodata_view', compact('data'));
    }
}