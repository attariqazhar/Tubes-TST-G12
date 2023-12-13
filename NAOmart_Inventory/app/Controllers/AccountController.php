<?php

namespace App\Controllers;
use App\Models\Account;

class AccountController extends BaseController
{
    public function index() 
    {
        echo view('layout/header');
        echo view('layout/sidebar');
        echo view('profilePage/profile');
        echo view('layout/footer');
    }

    public function login() {
        if (session()->get('username') == '') {
            echo view('layout/loginHeader');
            echo view('loginPage/login');
            echo view('layout/footer');
        } else {
            return redirect()->to('/');
        }
    }

    public function login_action(){
        $model = model(Account::class);
        $username = $this->request->getPost('username');
        $password = md5($this->request->getPost('password'));
        $cek = $model->getDataUsers($username, $password);

        if ($cek == 1){
            $name = $model->getName($username);
            $email = $model->getEmail($username);
            $gender = $model->getGender($username);
            session()->set('username',$username);
            session()->set('email',$email);
            session()->set('name',$name);
            session()->set('gender',$gender);
            return redirect()->to('/');
        } else {
            return redirect()->to('/login');
        }
    }

    public function logout() {
        session()->destroy();
        return redirect()->to('/login');
    }
}
