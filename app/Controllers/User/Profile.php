<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;

class Profile extends BaseController
{
    function __construct()
    {
        $this->userModel = model('App\Models\User\User');
    }

    public function index()
    {
        $data['title'] = 'Profile';
        $data['user'] = $this->session->get('rg_user');
        echo view('layout/signed/header', $data);
        echo view('user/profile');
        echo view('layout/signed/footer');
    }

    public function getEdit($id){
        $user = $this->userModel->where(array("id" => $id))->findAll();
        if(sizeof($user) > 0){
            $data['prof'] = $user[0];
            echo view('user/editprofile', $data);
        }
        else{
            echo "Invalid user";
        }
    }

    public function save(){
        $data = $this->request->getPost();
        if($this->userModel->save($data)){
            echo 'success';
        }
        else{
            echo 'Unable to update profile';
        }
    }
}
