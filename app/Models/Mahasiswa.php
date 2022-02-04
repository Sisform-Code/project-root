<?php

namespace APP\Models;

use CodeIgniter\Model;

class Mahasiswa extends Model
{
    public function tampilMhs()
    {
        $mahasiswa = [
            [
                'npm' => 123,
                'nama' => 'adi'
            ],
            [
                'npm' => 456,
                'nama' => 'ari'
            ],
            [
                'npm' => 789,
                'nama' => 'ani'
            ],
        ];
        return $mahasiswa;
    }
}
