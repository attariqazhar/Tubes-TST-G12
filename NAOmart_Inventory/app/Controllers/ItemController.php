<?php

namespace App\Controllers;
use App\Models\Item;

class ItemController extends BaseController
{
    public function getLowStock()
    {
        $model = model(Item::class);
        $lowStockThreshold = 5;
        $lowStockItems = $model->where('stock <', $lowStockThreshold)->findAll();
        $data = ['lowStockItems' => $lowStockItems];
        return $data;
    }

    public function getItems()
    {
        $model = model(Item::class);
        $data = [
            'items' => $model->orderBy('itemId', 'DESC')->paginate(5),
            'pager' => $model->pager
        ];
        return $data;
    }

    public function index()
    {
        $itemsData = $this->getItems();
        $lowStockItems = $this->getLowStock();
        $data = array_merge($itemsData, $lowStockItems);
        echo view('layout/header');
        echo view('layout/sidebar');
        echo view('dashboardPage/dashboard',$data);
        echo view('layout/footer');
    }

    public function updateStock($itemId)
    {
        // $model = model(Item::class);
        // $model->update($itemId, ['stock' => $stock]);
        // return redirect()->to('/');
        // Get the stock value from the request
        $stock = $this->request->getJSON(true)['stock'];

        // Update the item in the database
        $model = model(Item::class);
        $model->update($itemId, ['stock' => $stock]);

        // Respond with a success message or appropriate response
        return $this->response->setJSON(['status' => 'success']);
    }


    public function addItem()
    {
        // $model = model(Item::class);
        // //get biggest id 
        // $biggestId = $model->selectMax('itemId');
        // $biggestId = $biggestId['itemId'];

        $data = [
            'itemId' => $this->request->getVar('itemName'),
            'itemName' => $this->request->getVar('itemName'),
            'category' => $this->request->getVar('category'),
            'price' => $this->request->getVar('price'),
            'stock' => $this->request->getVar('stock'),
        ];

        $model = model(Item::class);
        $model->insert($data);

        return redirect()->to('/');
        
    }
}
