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
            'nama' => 'Budi Santoso',
            'nim' => 'E41230001',
            'prodi' => 'Teknik Informatika',
            'kampus' => 'Politeknik Negeri Jember'
        ];

        return view('biodata_view', compact('data'));
    }
}