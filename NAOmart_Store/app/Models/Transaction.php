<?php 
namespace App\Models;
use CodeIgniter\Model;

class Transaction extends Model
{
    protected $table = 'transaction';

    public function getDataTransaction(){
        return $this->findAll();
    }

    public function getCustomerTransactionHistory($email) {
        $result = $this->where('email',$email)->orderBy('transactionDate','DESC')->findAll();

        // $result = $this
        //     ->select('transaction.*, customer.*') // Include columns you need from both tables
        //     ->join('customer', 'customer.email = transaction.email')
        //     ->where('transaction.email', $email)
        //     ->findAll();
        return $result;
    }
}