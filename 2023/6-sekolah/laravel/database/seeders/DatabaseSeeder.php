<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Mengisi data awal untuk tabel siswa
        DB::table('siswa')->insert([
            [
                'nama' => 'John Doe',
                'kelas' => '10A',
                'alamat' => 'Jalan Sudirman No. 123, Jakarta',
            ],
            [
                'nama' => 'Jane Smith',
                'kelas' => '11B',
                'alamat' => 'Jalan Thamrin No. 456, Bandung',
            ],
            [
                'nama' => 'Michael Johnson',
                'kelas' => '12C',
                'alamat' => 'Jalan Gatot Subroto No. 789, Surabaya',
            ],
        ]);

        // Mengisi data awal untuk tabel guru
        DB::table('guru')->insert([
            [
                'nama' => 'Robert Brown',
                'mata_pelajaran' => 'Matematika',
                'no_telp' => '081234567890',
            ],
            [
                'nama' => 'Emily Wilson',
                'mata_pelajaran' => 'Bahasa Inggris',
                'no_telp' => '089876543210',
            ],
            [
                'nama' => 'David Taylor',
                'mata_pelajaran' => 'Biologi',
                'no_telp' => '087654321098',
            ],
        ]);

        // Mengisi data awal untuk tabel nilai
        DB::table('nilai')->insert([
            [
                'siswa_id' => 1,
                'guru_id' => 1,
                'mata_pelajaran' => 'Matematika',
                'nilai' => 85,
            ],
            [
                'siswa_id' => 1,
                'guru_id' => 2,
                'mata_pelajaran' => 'Bahasa Inggris',
                'nilai' => 92,
            ],
            [
                'siswa_id' => 2,
                'guru_id' => 1,
                'mata_pelajaran' => 'Matematika',
                'nilai' => 78,
            ],
            [
                'siswa_id' => 2,
                'guru_id' => 3,
                'mata_pelajaran' => 'Biologi',
                'nilai' => 90,
            ],
            [
                'siswa_id' => 3,
                'guru_id' => 2,
                'mata_pelajaran' => 'Bahasa Inggris',
                'nilai' => 83,
            ],
            [
                'siswa_id' => 3,
                'guru_id' => 3,
                'mata_pelajaran' => 'Biologi',
                'nilai' => 75,
            ],
        ]);
    }
}