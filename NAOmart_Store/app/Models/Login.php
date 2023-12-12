<?php 
namespace App\Models;
use CodeIgniter\Model;
class Login extends Model
{
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
}