<?php
namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;
use App\Models\Transaction;

class TransactionAPI extends ResourceController
{
    public function sendTransactionData()
    {
        $model = model(Transaction::class);
        $data = [
                'message' => 'success',
                'transaction' => $model->getDataTransaction()
            ];
        return $this->respond($data,200);
    }

    public function sendBestSelling()
    {
        $db = \Config\Database::connect();        
        $query = $db->table('transaction')
                    ->select("itemName,itemId,SUM(amount) as totalAmount")
                    ->groupby("itemName,itemId")
                    ->orderBy('totalAmount','desc')
                    ->limit(3)
                    ->get();

        $result = $query->getResult();
        $data =[
            'message' => 'success',
            'bestSeller' => $result
        ];
        return $this->respond($data,200);
    }

    public function sendTotalIncome()
    {
        $db = \Config\Database::connect();
        $query = $db->table('transaction')
                    ->select('SUM(totalPrice)')
                    ->get();
        $result = $query->getResult();
        $data =[
            'message' => 'success',
            'totalIncome' => $result
        ];
        return $this->respond($data,200);
    }

    public function makeTransaction()
    {
        $data = [
            'transactionId' => $this->request->getVar('email'),
            'email' => $this->request->getVar('email'),
            'itemId' => $this->request->getVar('itemId'),
            'itemName' => $this->request->getVar('itemName'),
            'amount' => $this->request->getVar('amount'),
            'totalPrice' => $this->request->getVar('totalPrice'),
            'transactionDate' 
        ];
        return $data;
    }
}