<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;

class Trainers extends BaseController
{
    public function index()
    {
        $data['title'] = 'Trainers';
        echo view('layout/signed/header', $data);
        echo view('user/trainers');
        echo view('layout/signed/footer');
    }
}
