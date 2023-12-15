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
        if (session()->get('username') == '') {
            return redirect()->to('login');
        } 
        $itemsData = $this->getItems();
        $lowStockItems = $this->getLowStock();
        $totalIncome= $this->getTotalIncomeFromApi();
        $bestSellers = $this->getBestSellersFromApi();
        
        $data = array_merge($itemsData, $lowStockItems,$totalIncome,$bestSellers);
        $data['bestSellers'] = $bestSellers;
        var_dump($bestSellers); 
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


    function getTotalIncomeFromApi()
    {
        $apiUrl = 'http://localhost:8080//transactionAPI/totalIncome';
        // Set up the HTTP headers
        $options = [
            'http' => [
                'method' => 'GET', // Adjust the HTTP method if needed
                'header' => [
                    'Content-type: application/json',
                ],
            ],
        ];

        // Create a stream context
        $context = stream_context_create($options);

        // Make the HTTP request
        $response = file_get_contents($apiUrl, false, $context);


    // Check for errors
    $response = file_get_contents($apiUrl);
    $responseData = json_decode($response, true);

    // Check for errors in the API response
    if (isset($responseData['message']) && $responseData['message'] === 'success' && isset($responseData['totalIncome'][0]['SUM(totalPrice)'])) {
        return ['totalIncome' => $responseData['totalIncome'][0]['SUM(totalPrice)']];
    } else {
        return ['error' => 'Error fetching total income'];
    }
}

function getBestSellersFromApi()
{
    $apiUrl = 'http://localhost:8080/transactionAPI/bestSeller';
    $response = file_get_contents($apiUrl);
    $responseData = json_decode($response, true);

    // Check for errors in the API response
    if (isset($responseData['message']) && $responseData['message'] === 'success' && isset($responseData['bestSellers'])) {
        return $responseData['bestSellers'];
    } else {
        return ['error' => 'Error fetching best-selling items'];
    }
}
}
