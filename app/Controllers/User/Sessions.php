<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;

class Sessions extends BaseController
{
    function __construct()
    {
        $this->sessionModel = model('App\Models\User\Session');
    }

    public function index()
    {
        $data['title'] = 'My Sessions';
        echo view('layout/signed/header', $data);
        echo view('user/mysession');
        echo view('layout/signed/footer');
    }

    public function bookSession(){
        $data['title'] = 'Book Session';
        echo view('layout/signed/header', $data);
        echo view('user/booksession');
        echo view('layout/signed/footer');
    }

    public function book()
    {
        $data = $this->request->getPost();
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
