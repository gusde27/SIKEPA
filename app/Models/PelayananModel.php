<?php

namespace App\Models;

use CodeIgniter\Model;

class PelayananModel extends Model
{
    protected $table = 'pelayanan';
    protected $useTimestamps = true;
    protected $allowedFields = ['id', 'nama', 'syarat', 'deskripsi', 'slug'];
}