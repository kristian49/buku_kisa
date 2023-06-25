<?php

namespace App\Models;

use CodeIgniter\Model;

class Tamu extends Model
{
    protected $table                = 'tamu';
    protected $primaryKey           = 'no';
    protected $useAutoIncrement     = true;
    protected $returnType           = 'object';
    protected $allowedFields        = ['nama_tamu', 'instansi', 'keperluan', 'fullname', 'tanggal', 'waktu'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'tanggal_buat';
    protected $updatedField  = 'tanggal_ubah';
}
