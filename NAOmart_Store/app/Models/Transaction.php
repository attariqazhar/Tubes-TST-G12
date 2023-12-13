<?php 
namespace App\Models;
use CodeIgniter\Model;

class Transaction extends Model
{
    protected $table = 'transaction';

    public function getDataTransaction(){
        return $this->findAll();
    }

    public function getCustomerTransactionHistory($customer) {
        $result = $this->where('email',$customer)->findAll();
        return $result;
    }
}