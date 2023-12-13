<?php

namespace App\Controllers;
use App\Models\Item;

class ItemController extends BaseController
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
}
