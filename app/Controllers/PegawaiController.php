<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use \Myth\Auth\Models\UserModel;

class PegawaiController extends BaseController
{
    // Inheritance
    protected $userModel, $db, $builder;

    public function __construct()
    {
        $this->userModel    = new UserModel();
        $this->db           = \Config\Database::connect();
        $this->builder      = $this->db->table('users');
    }

    // Method Read
    public function index()
    {
        $data = [
            'title'     => 'Data Pegawai',
            'pegawai'   => $this->builder->get()->getResultObject()
        ];

        return view('user/pegawai', $data);
    }

    public function tambah()
    {
        $data['title'] = 'Register';
        return view('auth/register', $data);
    }

    public function edit($id)
    {
        $data = [
            'nip'       => strip_tags(esc($this->request->getPost('nip'))),
            'fullname'  => strip_tags(esc($this->request->getPost('fullname'))),
            'nickname'  => strip_tags(esc($this->request->getPost('nickname'))),
            'email'     => strip_tags(esc($this->request->getPost('email'))),
            'username'  => strip_tags(esc($this->request->getPost('username'))),
            'job'       => strip_tags(esc($this->request->getPost('job')))
        ];

        $this->builder->where('id', $id);
        $this->builder->update($data);

        return redirect('pegawai')->with('success', 'Data Berhasil Diperbarui');
    }

    public function hapus($id)
    {
        $this->builder->delete(['id' => $id]);

        return redirect('pegawai')->with('success', 'Data Berhasil Dihapus');
    }
}
