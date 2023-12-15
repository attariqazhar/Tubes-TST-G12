<?php
namespace App\Controllers;
Use App\Models\Transaction;

class TransactionController extends BaseController {
    
    public function index()
    {
        // $model = model(Transaction::class);
        // $data['transaction'] = $model->getDataTransaction();
        // return view('/profile-and-transaction/transaction');
        if (session()->get('username') == '') {
            return redirect()->to('login');
        }            
        $model = model(Transaction::class);
        $customer = session('email');
        $data['transactions'] = $model->getCustomerTransactionHistory($customer);
        echo view('layout/header');
        echo view('profile-and-transaction/transaction', $data);
        echo view('layout/footer');
    }

    // public function showTransactionHistory()
    // {
    //     $model = model(Transaction::class);
    //     // $customer = strtolower(session('username'));
    //     $customer = session('email');
    //     $data['transactions'] = $model->getCustomerTransactionHistory($customer);
    //     return view("/profile-and-transaction/transaction",$data);
    // }

    public function getBestSellerItems()
    {
        $db = \Config\Database::connect();
        $query = $db->table('transaction')
                    ->select("itemName,itemId,SUM(amount) as totalAmount")
                    ->groupby("itemName,itemId")
                    ->orderBy('totalAmount','desc')
                    ->limit(3)
                    ->get();
        $result = $query->getResultArray();
        $bestSeller = [
            'bestSellerItems' => $result
        ];
        return $bestSeller;
    }
}