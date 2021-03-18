<?php

namespace App\Models;

use CodeIgniter\Model;

class ArtikelModel extends Model
{
    protected $table = 'artikel';
    protected $useTimestamps = true;
    protected $allowedFields = ['id', 'judul', 'deskripsi', 'gambar', 'slug'];
}