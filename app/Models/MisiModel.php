<?php

namespace App\Models;

use CodeIgniter\Model;

class MisiModel extends Model
{
    protected $table = 'misi';
    protected $useTimestamps = true;
    protected $allowedFields = ['id', 'misi'];
}