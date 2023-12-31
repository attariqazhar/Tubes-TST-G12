<?php

namespace App\Controllers;
use App\Models\Item;
Use App\Models\Transaction;

class ItemController extends BaseController
{
    public function getLowStock()
    {
        $api_link = 'http://localhost:8081/API/getLowStock/Jh4sGv9p2tRfXq1wL7zYc6n8xUo3mBkA5eIiQjOuPdCs0';
        $json_data = file_get_contents($api_link);
        
        $decoded_data = json_decode($json_data, true);
    
        if (is_array($decoded_data) && array_key_exists('items', $decoded_data)) {
            $data['lowStockItemId'] = $decoded_data['items'];
        } else {
            echo "Invalid data format.";
        }
        return $data;
    }

    public function getItems()
    {
        $api_link = 'http://localhost:8081/API/getItems/Jh4sGv9p2tRfXq1wL7zYc6n8xUo3mBkA5eIiQjOuPdCs0';
        $json_data = file_get_contents($api_link);
        
        $decoded_data = json_decode($json_data, true);
    
        if (is_array($decoded_data) && array_key_exists('items', $decoded_data)) {
            $data['itemsData'] = $decoded_data['items'];
        } else {
            echo "Invalid data format.";
        }
        return $data;
    }

    public function search()
    {
        $keyword = $this->request->getGet('keyword'); // Get the keyword from the query string
        
        // Fetch all items from the API
        $items = $this->getItems()['itemsData'];

        // Filter items based on the search keyword
        $filteredItems = array_filter($items, function ($item) use ($keyword) {
            // Customize this condition based on your API response structure
            return stripos($item['itemName'], $keyword) !== false;
        });
        
        // Pass the filtered items to the view
        $data['items'] = $filteredItems;
        $data['keyword'] = $keyword;

        // Load the view with the search results
        echo view('layout/header');
        echo view('storePage/search', $data);
        echo view('layout/footer');
    }

    public function index()
    {
        
        $items = $this->getItems();
        $data = array_merge($items);
        if (session()->get('username') == '') {
            return redirect()->to('login');
        }            
        echo view('layout/header');
        echo view('storePage/store',$data);
        echo view('layout/footer');
    }
}
