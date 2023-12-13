<?php
namespace App\Models;
use CodeIgniter\Model;

class Item extends Model
{
    protected $table = 'item';

    public function getDataItem()
    {
        return $this->findAll();
    }

    public function getNumberOfItems() {
        return $this->countAllResults(); 
    }
}
