<?php

namespace App\Models;

use CodeIgniter\Model;

class GaleriModel extends Model
{
    protected $table = 'galeri';
    protected $useTimestamps = true;
    protected $allowedFields = ['id', 'gambar'];
}