<?php

namespace App\Controllers;

use CodeIgniter\Controller;
class ItemAPIReceiver extends Controller
{
    public function getItems()
    {
        $api_link = 'http://localhost/8081';
        $json_data = file_get_contents($api_link);
        $data['items_data'] = json_decode($json_data,true);
        return $data;
    }
}
