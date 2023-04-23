<?php

namespace App\Models;

use CodeIgniter\Model;

class Usuarios extends Model
{
    protected $table = 'users';

    public function obtenerUsuario($data)
    {
        return $this->where($data)->first();
    }
}