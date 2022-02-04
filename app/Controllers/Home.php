<?php

namespace App\Controllers;

use App\Models\Mahasiswa;

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
        return view('data', compact('data_mhs'));
    }
}
