<?php

namespace App\Controllers;
use App\Models\Item;
Use App\Models\Transaction;

class Pages extends BaseController
{
    public function login()
    {
        if (session()->get('username') == '') {
            echo view('layout/loginHeader');
            echo view('loginPage/login');
            echo view('layout/footer');
        } else {
            return redirect()->to('/');
        }
    }

    public function index()
    {
        if (session()->get('username') == '') {
            return redirect()->to('login');
        }            
        echo view('layout/header');
        echo view('storePage/store');
        echo view('layout/footer');
    }

    public function transaction() 
    {
        if (session()->get('username') == '') {
            return redirect()->to('login');
        }            
        $model = model(Transaction::class);
        $customer = strtolower(session('username'));
        $data['transactions'] = $model->getCustomerTransactionHistory($customer);
        echo view('layout/header');
        echo view('profile-and-transaction/transaction', $data);
        echo view('layout/footer');
    }
}
