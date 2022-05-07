<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;

class Sess extends BaseController
{
    function __construct()
    {
        $this->sessionModel = model('App\Models\User\Sess');
    }

    public function index()
    {
        $data['title'] = 'My Sessions';
        $id = $this->session->get('rg_user')->id;
        $data['sess'] = $this->sessionModel->where(['user_id' => $id])->findAll();
        echo view('layout/signed/header', $data);
        echo view('user/mysession', $data);
        echo view('layout/signed/footer');
    }

    public function bookSession(){
        $data['title'] = 'Book Session';
        echo view('layout/signed/header', $data);
        echo view('user/booksession');
        echo view('layout/signed/footer');
    }

    public function bookone()
    {
        $data = $this->request->getPost();
        $data['user_id'] = $this->session->get('rg_user')->id;
        $res = $this->sessionModel->save($data);
        if($res){
            echo 'success';
        }
        else{
            echo $res ;
        }
    }

    public function availableSession(){
        $data['title'] = 'Available Sessions';
        echo view('layout/signed/header', $data);
        echo view('user/sessionavailable');
        echo view('layout/signed/footer');
    }
}
