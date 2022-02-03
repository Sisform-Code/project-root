<?php

namespace App\Models;

use CodeIgniter\Model;

class People extends Model
{
    protected $table = "people";
    protected $useTimestamps = true;
    protected $allowedFields = [
        'nama',
        'alamat',
        'no_hp'
    ];

    public function getPeople($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }
}
