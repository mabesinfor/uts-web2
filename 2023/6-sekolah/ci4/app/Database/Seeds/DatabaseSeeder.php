<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call('SiswaSeeder');
        $this->call('GuruSeeder');
        $this->call('NilaiSeeder');
    }
}