<?php

namespace App\Controllers;

use \App\Models\People;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function test()
    {
        // $judul = 'cvkjdfnvkjnv';
        // return view('data', compact('judul'));
        $peoples = new People();

        $data = [
            'judul' => "ini judul",
            'data' => $peoples->getPeople()
        ];

        dd($data);
        return view('data', $data);
    }
}
