<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->session->get('rg_user');
        echo view('layout/signed/header', $data);
        echo view('user/dashboard');
        echo view('layout/signed/footer');
    }
}
