<?php

namespace App\Controllers;
use App\Models\Item;

class Pages extends BaseController
{
    public function login()
    {
        echo view('layout/loginHeader');
        echo view('loginPage/login');
        echo view('layout/footer');
    }

    public function index()
    {
        echo view('layout/header');
        echo view('storePage/store');
        echo view('layout/footer');
    }

    public function profile() 
    {
        echo view('layout/header');
        echo view('profilePage/profile');
        echo view('layout/footer');
    }
}
