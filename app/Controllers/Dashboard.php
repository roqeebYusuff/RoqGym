<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        $data['title'] = 'Test';
        echo view('layout/signed/header', $data);
        echo view('layout/signed/footer');
    }
}
