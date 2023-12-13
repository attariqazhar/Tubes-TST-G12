<?php

namespace App\Controllers;
use App\Models\Item;
Use App\Models\Transaction;

class ItemController extends BaseController
{
    public function index()
    {
        if (session()->get('username') == '') {
            return redirect()->to('login');
        }            
        echo view('layout/header');
        echo view('storePage/store');
        echo view('layout/footer');
    }
}
