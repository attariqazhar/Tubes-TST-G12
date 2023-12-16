<?php
namespace App\Models;
use CodeIgniter\Model;

class Item extends Model
{
    protected $table = 'item';

    protected $allowedFields = ['itemId','itemName', 'category', 'price', 'stock'];
    protected $primaryKey = 'itemId'; 
    protected $useAutoIncrement = true;


    public function search($keyword)
    {
        return $this->like('itemName', $keyword)
                    ->orLike('itemId', $keyword)
                    ->findAll();
    }

}
