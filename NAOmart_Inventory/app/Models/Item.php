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

    public function getPaginated($num, $keyword=null){
        $builder= $this->builder();
        if ($keyword!=''){
            $builder->like('itemName',$keyword);
            $builder->orLike('itemId',$keyword);
        }
        return ['items'=>$this->paginate($num),
                'pager'=>$this->pager,];
    
    
    }

}
