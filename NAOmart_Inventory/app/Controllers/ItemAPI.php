<?php

namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;
use App\Models\Item;

class ItemAPI extends ResourceController
{
    public function getLowStock()
    {
        $db = \Config\Database::connect();
    
        // Build the query to select all fields from the "transaction" table
        $query = $db->table('item')
                ->select('itemId')
                ->where('stock <', 10);
    
        // Execute the query and get the result
        $result = $query->get()->getResult();
    
        // Prepare the response data
        $data = [
            'message' => 'success',
            'items'   => array_column($result, 'itemId'),
        ];
    
        // Respond with JSON
        return $this->response->setStatusCode(200)->setJSON($data);
    }

    public function getItems()
    {
        // Connect to the database
        $db = \Config\Database::connect();
    
        // Build the query to select all fields from the "transaction" table
        $query = $db->table('item')
                    ->select('*'); 
    
        // Execute the query and get the result
        $result = $query->get()->getResult();
    
        // Prepare the response data
        $data = [
            'message' => 'success',
            'items'   => $result,
        ];
    
        // Respond with JSON
        return $this->response->setStatusCode(200)->setJSON($data);
    }
}
