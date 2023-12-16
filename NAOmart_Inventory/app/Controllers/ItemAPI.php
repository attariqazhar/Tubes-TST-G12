<?php

namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;
use App\Models\Item;

class ItemAPI extends ResourceController
{
    private $token = "Jh4sGv9p2tRfXq1wL7zYc6n8xUo3mBkA5eIiQjOuPdCs0";
    public function getLowStock($incomingToken)
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
        if ($incomingToken === $this->token) {
            return $this->response->setStatusCode(200)->setJSON($data);
        } else {
            // Respond with an error message
            $errorData = [
                'message' => 'error',
                'items'   => 'Invalid token',
            ];
            return $this->response->setStatusCode(401)->setJSON($errorData);
        }
        
    }

    public function getItems($incomingToken)
    {
        // Connect to the database
        $db = \Config\Database::connect();
    
        // Build the query to select all fields from the "item" table
        $query = $db->table('item')
                    ->select('*');
    
        // Execute the query and get the result
        $result = $query->get()->getResult();
    
        // Prepare the response data
        $data = [
            'message' => 'success',
            'items'   => $result,
        ];
    
        // Check if the provided token is valid
        if ($incomingToken === $this->token) {
            return $this->response->setStatusCode(200)->setJSON($data);
        } else {
            // Respond with an error message
            $errorData = [
                'message' => 'error',
                'error'   => 'Invalid token',
            ];
            return $this->response->setStatusCode(401)->setJSON($errorData);
        }
    }
}
