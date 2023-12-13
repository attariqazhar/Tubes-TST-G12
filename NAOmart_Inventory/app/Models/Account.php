<?php 
namespace App\Models;
use CodeIgniter\Model;

class Account extends Model
{
    protected $table = 'account';

    public function getDataUsers($username,$password)
    {
        $db = \Config\Database::connect();
        $queryString = 'SELECT NAME from account WHERE
        username = "'.$username.'"
        AND password = "'.$password.'"';
        $query = $db->query($queryString);
        $result = $query->getResult();
        return count($result);
    }

    public function getName($username)
    {
        $db = \Config\Database::connect();
        $queryString = 'SELECT NAME from account WHERE
        username = "'.$username.'"';
        $query = $db->query($queryString);
        $result = $query->getResult();
        return $result[0]->NAME;
    }

    public function getEmail($username)
    {
        $db = \Config\Database::connect();
        $queryString = 'SELECT EMAIL from account WHERE
        username = "'.$username.'"';
        $query = $db->query($queryString);
        $result = $query->getResult();
        return $result[0]->EMAIL;
    }

    public function getGender($username)
    {
        $db = \Config\Database::connect();
        $queryString = 'SELECT GENDER from account WHERE
        username = "'.$username.'"';
        $query = $db->query($queryString);
        $result = $query->getResult();
        return $result[0]->GENDER;
    }

}