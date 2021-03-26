<?php

namespace App\Models;

use CodeIgniter\Model;

class StrukturModel extends Model
{
    protected $table = 'struktur';
    protected $useTimestamps = true;
    protected $allowedFields = ['id', 'isi'];
}