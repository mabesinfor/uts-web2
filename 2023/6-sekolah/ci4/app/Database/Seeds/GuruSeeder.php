<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class GuruSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama' => 'Suryanto',
                'mata_pelajaran' => 'Matematika',
                'no_telp' => '081234567890',
            ],
            [
                'nama' => 'Siti Rahmawati',
                'mata_pelajaran' => 'Bahasa Indonesia',
                'no_telp' => '082345678901',
            ],
            [
                'nama' => 'Ahmad Fauzi',
                'mata_pelajaran' => 'Biologi',
                'no_telp' => '083456789012',
            ],
            // Tambahkan data guru lainnya
        ];

        $this->db->table('guru')->insertBatch($data);
    }
}