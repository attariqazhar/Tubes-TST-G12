<?php
namespace App\Controllers;
Use App\Models\Transaction;

class TransactionController extends BaseController {
    
    public function index()
    {
        $model = model(Transaction::class);
        $data['transaction'] = $model->getDataTransaction();
        return view('transaction');
    }

    public function showTransactionHistory()
    {
        $model = model(Transaction::class);
        $customer = strtolower(session('username'));
        $data['transactions'] = $model->getCustomerTransactionHistory($customer);
        return view("transaction",$data);
    }
}