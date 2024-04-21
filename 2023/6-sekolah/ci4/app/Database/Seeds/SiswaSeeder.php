<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SiswaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama' => 'Andi',
                'kelas' => '1A',
                'alamat' => 'Jalan Raya No. 1',
            ],
            [
                'nama' => 'Budi',
                'kelas' => '1B',
                'alamat' => 'Jalan Raya No. 2',
            ],
            [
                'nama' => 'Citra',
                'kelas' => '2A',
                'alamat' => 'Jalan Raya No. 3',
            ],
            // Tambahkan data siswa lainnya
        ];

        $this->db->table('siswa')->insertBatch($data);
    }
}