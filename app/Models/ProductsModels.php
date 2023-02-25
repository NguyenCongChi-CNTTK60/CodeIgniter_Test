<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductsModels extends Model
{
    public function getData()
    {
        $db = \Config\Database::connect();
        $query = $db->query('SELECT product_thumb,price,product_title,date_create,cat_title,supplier_name,number_stock FROM tbl_products INNER JOIN tbl_supplier ON tbl_products.supplier_id = tbl_supplier.supplier_id INNER JOIN tbl_category ON tbl_products.cat_id = tbl_category.cat_id');
        $result = $query->getResult();
        return $result;
    }
}