<?php

namespace App\Controllers;

use App\Models\Tamu;

class Home extends BaseController
{
    // Inheritance
    protected $config, $tamu;

    public function __construct()
    {
        $this->config = config('Auth');
        $this->tamu = new Tamu();
    }

    public function index()
    {
        $data = [
            'title' => 'e-Visitor Widyatama University',
            'tamu'  => $this->tamu->findAll()
        ];

        // return view('welcome_message');
        return view('home/home', $data);
    }

    public function login()
    {
        $data = [
            'config' => $this->config,
            'title' => 'Login'
        ];
        return view('auth\login', $data);
    }

    public function forgot()
    {
        $data['title'] = 'Forgot Password';
        return view('auth/forgot', $data);
    }

    public function reset()
    {
        $data['title'] = 'Reset Password';
        return view('auth/reset', $data);
    }

    // insert tamu
    public function tambah_utama_tamu()
    {
        $data = [
            'nama_tamu' => $this->request->getPost('nama_tamu'),
            'instansi'  => $this->request->getPost('instansi'),
            'keperluan' => $this->request->getPost('keperluan'),
            'fullname'  => $this->request->getPost('fullname'),
            'tanggal'   => $this->request->getPost('tanggal'),
            'waktu'     => $this->request->getPost('waktu')
        ];
        $this->tamu->insert($data);
        return redirect('home')->with('success', 'Data Berhasil Ditambahkan');
    }
}
