<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tamu extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'no'                  => [
                'type'                  => 'INT',
                'constraint'            => 5,
                'unsigned'              => true,
                'auto_increment'        => true
            ],
            'nama_tamu'           => [
                'type'                  => 'VARCHAR',
                'constraint'            => '255'
            ],
            'instansi'            => [
                'type'                  => 'VARCHAR',
                'constraint'            => '255'
            ],
            'keperluan'           => [
                'type'                  => 'VARCHAR',
                'constraint'            => '255'
            ],
            'fullname'            => [
                'type'                  => 'VARCHAR',
                'constraint'            => '255'
            ],
            'tanggal'             => [
                'type'                  => 'DATE',
                'null'                  => true
            ],
            'waktu'               => [
                'type'                  => 'TIME',
                'null'                  => true
            ],
            'tanggal_buat'        => [
                'type'                  => 'DATETIME',
                'null'                  => true
            ],
            'tanggal_ubah'        => [
                'type'                  => 'DATETIME',
                'null'                  => true
            ],
        ]);

        $this->forge->addKey('no', TRUE);

        $this->forge->createTable('tamu', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('tamu');
    }
}
