<?php

namespace App\Controllers;

class Coba extends BaseController
{
    public function index()
    {
        return view('coba');
    }

    public function data()
    {
        // $judul = "JUDUL";

        // return view('data', compact('judul'));
        $data = 
        [
            'judul' => "Pelatihan CI4",
            'data' => "Controller Coba Method data"
        ];

        return view('data', $data);
    }
}
