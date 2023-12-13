<?php
namespace App\Controllers;
use App\Models\Customer;
class CustomerController extends BaseController{
    public function index() {
        $model = model(Customer::class);
        $data['customer'] = $model->getDataCustomer();
        return view('customer');
    }

    public function login_action(){
        $model = model(Customer::class);
        $username = $this->request->getPost('username');
        $password = md5($this->request->getPost('password'));
        $cek = $model->getDataUsers($username, $password);

        if ($cek == 1){
            $name = $model->getName($username);
            $email = $model->getEmail($username);
            $gender = $model->getGender($username);
            session()->set('username',$username);
            session()->set('email',$email);
            session()->set('name',$name);
            session()->set('gender',$gender);
            return redirect()->to('/');
        } else {
            return redirect()->to('/login');
        }
    }

    public function logout() {
        session()->destroy();
        return redirect()->to('/login');
    }
}
