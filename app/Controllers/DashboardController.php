<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use \Myth\Auth\Models\UserModel;
use App\Models\Tamu;

class DashboardController extends BaseController
{
    protected $userModel, $tamu;

    function __construct()
    {
        $this->userModel    = new UserModel();
        $this->tamu         = new Tamu();
    }

    public function index()
    {
        $data = [
            'title'     => 'Dashboard',
            'pegawai'   => $this->userModel->countAllResults(),
            'tamu'      => $this->tamu->countAllResults()
        ];

        return view('user/dashboard', $data);
    }
}
