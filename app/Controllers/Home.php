<?php

namespace App\Controllers;

use App\Models\Mahasiswa;
use App\Models\MahasiswaModel;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function test()
    {
        $mhs = new Mahasiswa();
        $data_mhs = $mhs->tampilMhs();
        // dd($data_mhs);
        return view('data', compact('data_mhs'));
    }

    public function mahasiswa()
    {
        $mhs = new MahasiswaModel();
        $data = [
            'judul' => 'Daftar Mahasiswa',
            'data_mahasiswa' => $mhs->findAll()
        ];
        return view('mahasiswa', $data);
    }
}
