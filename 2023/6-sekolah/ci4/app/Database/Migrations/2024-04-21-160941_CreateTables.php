<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTables extends Migration
{
    public function up()
    {
        // Membuat tabel siswa
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'kelas'      => [
                'type'           => 'VARCHAR',
                'constraint'     => '50',
            ],
            'alamat'      => [
                'type'           => 'TEXT',
                'null'           => true,
            ],
            'created_at' => [
                'type'           => 'DATETIME',
                'null'           => true,
            ],
            'updated_at' => [
                'type'           => 'DATETIME',
                'null'           => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('siswa');

        // Membuat tabel guru
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'mata_pelajaran' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'no_telp'    => [
                'type'           => 'VARCHAR',
                'constraint'     => '20',
            ],
            'created_at' => [
                'type'           => 'DATETIME',
                'null'           => true,
            ],
            'updated_at' => [
                'type'           => 'DATETIME',
                'null'           => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('guru');

        // Membuat tabel nilai
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'siswa_id'   => [
                'type'           => 'INT',
                'unsigned'       => true,
            ],
            'guru_id'    => [
                'type'           => 'INT',
                'unsigned'       => true,
            ],
            'mata_pelajaran' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'nilai'      => [
                'type'           => 'INT',
                'constraint'     => 3,
            ],
            'created_at' => [
                'type'           => 'DATETIME',
                'null'           => true,
            ],
            'updated_at' => [
                'type'           => 'DATETIME',
                'null'           => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('siswa_id', 'siswa', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('guru_id', 'guru', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('nilai');
    }

    public function down()
    {
        $this->forge->dropTable('nilai');
        $this->forge->dropTable('guru');
        $this->forge->dropTable('siswa');
    }
}