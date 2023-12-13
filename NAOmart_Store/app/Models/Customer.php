<?php 
namespace App\Models;
use CodeIgniter\Model;
class Customer extends Model
{
    protected $table = 'customer';
    public function getDataCustomer() {
        return $this->findAll();
    }
    public function getDataUsers($username,$password)
    {
        $db = \Config\Database::connect();
        $queryString = 'SELECT NAME from customer WHERE
        username = "'.$username.'"
        AND password = "'.$password.'"';
        $query = $db->query($queryString);
        $result = $query->getResult();
        return count($result);
    }

    public function getName($username)
    {
        $db = \Config\Database::connect();
        $queryString = 'SELECT NAME from customer WHERE
        username = "'.$username.'"';
        $query = $db->query($queryString);
        $result = $query->getResult();
        return $result[0]->NAME;
    }

    public function getEmail($username)
    {
        $db = \Config\Database::connect();
        $queryString = 'SELECT EMAIL from customer WHERE
        username = "'.$username.'"';
        $query = $db->query($queryString);
        $result = $query->getResult();
        return $result[0]->EMAIL;
    }

    public function getGender($username)
    {
        $db = \Config\Database::connect();
        $queryString = 'SELECT GENDER from customer WHERE
        username = "'.$username.'"';
        $query = $db->query($queryString);
        $result = $query->getResult();
        return $result[0]->GENDER;
    }

}