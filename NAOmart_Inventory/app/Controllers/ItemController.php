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
            'items' => $model->paginate(5),
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
}
