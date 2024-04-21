<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class NilaiSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'siswa_id' => 1,
                'guru_id' => 1,
                'mata_pelajaran' => 'Matematika',
                'nilai' => 80,
            ],
            [
                'siswa_id' => 1,
                'guru_id' => 2,
                'mata_pelajaran' => 'Bahasa Indonesia',
                'nilai' => 85,
            ],
            [
                'siswa_id' => 2,
                'guru_id' => 1,
                'mata_pelajaran' => 'Matematika',
                'nilai' => 75,
            ],
            // Tambahkan data nilai lainnya
        ];

        $this->db->table('nilai')->insertBatch($data);
    }
}