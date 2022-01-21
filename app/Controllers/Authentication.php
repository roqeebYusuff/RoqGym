<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Authentication extends BaseController
{
    public function index()
    {
        //
    }

    public function signin(){
        echo view('authentication/signin');
    }

    public function signup(){        
        echo view('authentication/signup');
    }

    public function passwordreset(){        
        echo view('authentication/resetpassword');
    }
}
