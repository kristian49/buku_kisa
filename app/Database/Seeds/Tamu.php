<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Tamu extends Seeder
{
    public function run()
    {
        // membuat data
        $data = [
            [
                'nama_tamu'     => '',
                'instansi'      => '',
                'keperluan'     => '',
                'fullname'      => '',
                'tanggal'       => '',
                'waktu'         => '',
                'tanggal_buat'  => Time::now(),
            ]
        ];

        $this->db->table('tamu')->insertBatch($data);
    }
}
