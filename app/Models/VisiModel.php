<?php

namespace App\Models;

use CodeIgniter\Model;

class VisiModel extends Model
{
    protected $table = 'visi';
    protected $useTimestamps = true;
    protected $allowedFields = ['id', 'visi'];
}