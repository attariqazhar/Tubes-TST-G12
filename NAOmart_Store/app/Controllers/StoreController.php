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
    
    public function index()
    {
        $items = $this->itemController->getItems();
        $lowStockItems = $this->itemController->getLowStock();
        $bestSellerItems = $this->getBestSellerItems();
        $data = array_merge($items,$lowStockItems,$bestSellerItems);
        if (session()->get('username') == '') {
            return redirect()->to('login');
        }            
        echo view('layout/header');
        echo view('storePage/store',$data);
        echo view('layout/footer');
    }
}