<?php

namespace App\Models;

use CodeIgniter\Model;

class FAQModel extends Model
{
    protected $table = 'faq';
    protected $useTimestamps = true;
    protected $allowedFields = ['id','pertanyaan', 'jawaban'];
}