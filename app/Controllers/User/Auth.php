<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;

class Auth extends BaseController
{
    function __construct()
    {
        $this->userModel = model('App\Models\User\User');
    }

    public function signin(){
        $message = '';
        if($this->request->getMethod() == 'post'){
            $data = $this->request->getPost();
            $user = $this->userModel->where('email', $data['email'])->orWhere('username', $data['email'])->findAll();

            if(sizeof($user) > 0){
                $data['hash'] = $user[0]->password;
                $res = $this->userModel->verifyPassword($data);

                if($res){
                    $this->session->set('rg_user', $user[0]);
                    return redirect()->to(site_url('user/dashboard'));
                }
                else{
                    $message = 'Invalid email or password';
                }
            }
            else{
                $message = 'Invalid email or password';
            }
        }
        $dat['message'] = $message;
        echo view('authentication/signin', $dat);
    }

    public function signup(){        
        echo view('authentication/signup');
    }

    public function register(){
        $data =  $this->request->getPost();

        // $check = $this->userModel->usernameOrEmailExists($data);
        $usernameCheck = $this->userModel->usernameExists($data);
        if($usernameCheck){
            echo 'The username is already being used';
        }
        else{
            $check = $this->userModel->emailExists($data);
            if($check){
                echo 'The email is already being used';
            }
            else{
                $result = $this->userModel->save($data);
    
                if($result){
                    echo 'success';
                }
                else{
                    echo 'An error occurred, unable to register';
                }
            }
        }
    }

    public function passwordreset(){        
        echo view('authentication/resetpassword');
    }

    public function signout(){
        $this->user_logout();
        return redirect()->to(site_url('user/auth/signin'));
    }
}
