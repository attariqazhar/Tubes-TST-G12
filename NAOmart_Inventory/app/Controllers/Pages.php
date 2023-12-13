<?php

namespace App\Controllers;
use App\Models\Item;

class Pages extends BaseController
{
    public function index()
    {
        $keyword = $this->request->getGet('keyword');
        $model = model(Item::class);
        $data =$model->getPaginated(5,$keyword);
        echo view('layout/header');
        echo view('layout/sidebar');
        echo view('dashboardPage/dashboard',$data);
        echo view('layout/footer');
    }

    public function profile() 
    {
        echo view('layout/header');
        echo view('layout/sidebar');
        echo view('profilePage/profile');
        echo view('layout/footer');
    }


    public function create(){
        $data = [
            'title' => 'asd'
        ];
        return view('/', $data);
    }


    public function addItem()
    {
        $model = new Item(); // Create a new instance of the Item model
    
        $model->save([
            'itemName' => $this->request->getVar('itemName'),
            'category' => $this->request->getVar('category'),
            'price'    => $this->request->getVar('price'),
            'stock'    => $this->request->getVar('stock')
        ]);
    
        return redirect()->to('/'); // Redirect to the home page or another appropriate URL
    }

    public function search()
    {
        $model = new Item();

        $keyword = $this->request->getVar('keyword');
        $data['items'] = $model->search($keyword);

        return view('components/table', $data);
    }
}
