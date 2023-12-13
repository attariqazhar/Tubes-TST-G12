<?php
namespace App\Controllers;
Use App\Models\Customer;

class CustomerController extends BaseController {
    public function index()
    {
        $model = model(Customer::class);
        $data['customer'] = $model->getDataCustomer();
        return view('customer');

            
    }
}