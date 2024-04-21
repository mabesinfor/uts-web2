<?php

namespace App\Models;

use CodeIgniter\Model;

class GuruModel extends Model
{
    protected $table = 'guru';
    protected $allowedFields = ['nama', 'mata_pelajaran', 'no_telp'];
    protected $useTimestamps = true;
}