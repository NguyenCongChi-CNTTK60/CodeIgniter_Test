<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModels extends Model
{
    public function getData()
    {
        $db = \Config\Database::connect();
        $query = $db->query('SELECT * FROM tbl_users');
        $result = $query->getResult();
        return $result;
    }

    public function verifyAcount($phonenumber)
    {
        //$db = \Config\Database::connect();
        $builder = $this->db->table('tbl_users');
        $builder->select('phonenumber');
        $builder->where('phonenumber', $phonenumber);
        $result = $builder->get();
        if (count($result->getResultArray()) == 1) {
            return $result->getRowArray();
        } else {
            return false;
        }
    }

    public function verifyPass($password)
    {
        //$db = \Config\Database::connect();
        $builder = $this->db->table('tbl_users');
        $builder->select('passwords');
        $builder->where('passwords', $password);
        $result = $builder->get();
        if (count($result->getResultArray()) == 1) {
            return $result->getRowArray();
        } else {
            return false;
        }
    }
}
