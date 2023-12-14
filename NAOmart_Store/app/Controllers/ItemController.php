<?php

namespace App\Controllers;
use App\Models\Item;
Use App\Models\Transaction;

class ItemController extends BaseController
{
    public function getPicture()
    {
        $links = [
            'toysUrl' => 'https://i.imgur.com/cl1RPTQ.jpg',
            'householdsUrl' => 'https://i.imgur.com/usbw5zM.jpg',
            'stationaryUrl' => 'https://imgur.com/cVFmMml',
            'fndUrl' => 'https://imgur.com/UyXPCpN'
        ];
        return $links;
    }

    public function getItems()
    {
        $api_link = 'http://localhost:8081/API/getItems';
        $json_data = file_get_contents($api_link);
        
        // Decode JSON data
        $decoded_data = json_decode($json_data, true);
    
        // Check if decoding was successful and the "items" key exists
        if (is_array($decoded_data) && array_key_exists('items', $decoded_data)) {
            // Extract only the "items" part
            $data['itemsData'] = $decoded_data['items'];
        } else {
            // Handle the case where the structure is not as expected
            echo "Invalid data format.";
            // You might want to log an error or handle it differently based on your application's requirements
        }
        return $data;
    }

    public function index()
    {
        $items = $this->getItems();
        $links = $this->getPicture();
        $data = array_merge($items,$links);
        if (session()->get('username') == '') {
            return redirect()->to('login');
        }            
        echo view('layout/header');
        echo view('storePage/store',$data);
        echo view('layout/footer');
    }
}
