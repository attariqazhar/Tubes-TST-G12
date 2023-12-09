<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        echo view('layout/header');
        echo view('layout/sidebar');
        echo view('dashboardPage/dashboard');
        echo view('layout/footer');
    }

    public function profile() 
    {
        echo view('layout/header');
        echo view('layout/sidebar');
        echo view('profilePage/profile');
        echo view('layout/footer');
    }
}
