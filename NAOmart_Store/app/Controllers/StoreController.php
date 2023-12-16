<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class StoreController extends Controller
{
    private $itemController;
    private $transactionController;
    public function __construct()
    {
        $this->itemController = new ItemController();
        $this->transactionController = new TransactionController();
    }

    public function getBestSellerItems()
    {
        $bestSellerData = $this->transactionController->getBestSellerItems()['bestSellerItems'];
        $items = $this->itemController->getItems()['itemsData'];

        $bestSellerItemIds = array_map(function($item) {
            return $item['itemId'];
        }, $bestSellerData);

        // Filter API items based on bestseller item IDs
        $bestSellerItems = array_filter($items, function($item) use ($bestSellerItemIds) {
            return in_array($item['itemId'], $bestSellerItemIds);
        });

        return ['bestSellerItems' => $bestSellerItems];
    }

    public function makeTransaction($itemId, $amount)
    {
        // $session = session();
        // $email = $session->get('email');
        $email = 'owen@gmail.com';
        $items = $this->itemController->getItems();
        $item = null;
        foreach ($items['itemsData'] as $apiItem) {
            if ($apiItem['itemId'] == $itemId) 
            {
                $item = $apiItem;
                break;
            }
        }

        if (!$item) {
            // Handle the case where the specified itemId is not found in the API response
            return $this->response->setJSON(['status' => 'error', 'message' => 'Item with specified itemId not found']);
        }

        $this->transactionController->addTransaction($email, $item, $amount);

        $updatedStock = $item['stock'] - $amount;
        $apiUrl = 'http://localhost:8081/API/update/' . $itemId . '/' . $updatedStock;
        $data = [
            'stock' => $updatedStock
        ];

        if (!is_array($data)) {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Invalid data format']);
        }

        
        $ch = curl_init($apiUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($ch, CURLOPT_POST, 1);

        $response = curl_exec($ch);

        // Check for errors and handle the response
        if ($response === false) {
            echo 'Error: ' . curl_error($ch);
        } else {
            $result = json_decode($response, true);

            if ($result['status'] == 'success') {
                echo 'Stock updated successfully';
            } else {
                echo 'Failed to update stock';
            }
        }

        curl_close($ch);
    }
    public function index()
    {
        $items = $this->itemController->getItems();
        $lowStockItems = $this->itemController->getLowStock();
        $bestSellerItems = $this->getBestSellerItems();
        $data = array_merge($items, $lowStockItems, $bestSellerItems);
        if (session()->get('username') == '') {
            return redirect()->to('login');
        }
        echo view('layout/header');
        echo view('storePage/store', $data);
        echo view('layout/footer');
    }
}