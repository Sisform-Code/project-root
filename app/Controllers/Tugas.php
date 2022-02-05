<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BukuModel;

class Tugas extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Profil',
            'nama' => 'Ifrizul Hanif Muhammad',
            'npm' => '18.1.03.03.0038',
            'kelas' => '4 A',
            'alamat' => 'Tulungrejo, Pare, Kediri',
        ];
        return view('tugas/profil', $data);
    }

    public function pendidikan()
    {
        $data = [
            'title' => 'Pendidikan',
            'sd' => 'SDN Tulungrejo II',
            'smp' => 'SMPN 2 Pare',
            'sma' => 'SMAN 1 Pare, IPA'
        ];
        return view('tugas/pendidikan', $data);
    }

    public function buku()
    {
        $buku = new BukuModel();
        $data = [
            'title' => 'Buku',
            'buku' => $buku->findAll()
        ];
        return view('tugas/buku', $data);
    }
}
