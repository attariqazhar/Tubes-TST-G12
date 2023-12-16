<?php
namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;
use App\Models\Transaction;

class TransactionAPI extends ResourceController
{  
    private $token = "e3fa7f5c45138d6d42a6e2db3f0b8fc5"; 
    public function sendTransactionData($incomingToken)
    {   
        if ($this->token != $incomingToken)
        {
            return("Wrong Authentication!");
        }
        $model = model(Transaction::class);
        $data = [
                'message' => 'success',
                'transaction' => $model->getDataTransaction()
            ];
        return $this->respond($data,200);
    }

    public function sendBestSelling($incomingToken)
    {
        if ($this->token != $incomingToken)
        {
            return("Wrong Authentication!");
        }
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

    public function sendTotalIncome($incomingToken)
    {
        if ($this->token != $incomingToken)
        {
            return("Wrong Authentication!");
        }
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
}