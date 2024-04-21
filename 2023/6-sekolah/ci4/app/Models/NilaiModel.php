<?php

namespace App\Models;

use CodeIgniter\Model;

class NilaiModel extends Model
{
    protected $table = 'nilai';
    protected $allowedFields = ['siswa_id', 'guru_id', 'mata_pelajaran', 'nilai'];
    protected $useTimestamps = true;
    protected $with = ['siswa', 'guru'];

    public function siswa()
    {
        return $this->belongsTo('App\Models\SiswaModel', 'siswa_id', 'id');
    }

    public function guru()
    {
        return $this->belongsTo('App\Models\GuruModel', 'guru_id', 'id');
    }
}
