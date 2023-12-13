<?php

namespace App\Controllers;
use App\Models\Item;

class Pages extends BaseController
{
    public function index()
    {
        $model = model(Item::class);
        $data = [
            'items' => $model->paginate(5),
            'pager' => $model->pager
        ];
        echo view('layout/header');
        echo view('layout/sidebar');
        echo view('dashboardPage/dashboard',$data);
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
