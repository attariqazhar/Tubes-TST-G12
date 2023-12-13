<?php
namespace App\Controllers;
Use App\Models\Transaction;

class TransactionController extends BaseController {
    
    public function index()
    {
        $model = model(Transaction::class);
        $data['transaction'] = $model->getDataTransaction();
        return view('/profile-and-transaction/transaction');
    }

    public function showTransactionHistory()
    {
        $model = model(Transaction::class);
        // $customer = strtolower(session('username'));
        $email = session("email");
        $data['transactions'] = $model->getCustomerTransactionHistory($email);
        return view("/profile-and-transaction/transaction",$data);
    }
}