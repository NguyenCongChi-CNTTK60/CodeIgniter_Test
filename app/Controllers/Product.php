<?php

namespace App\Controllers;

use App\Models\UsersModels;
use CodeIgniter\Commands\Utilities\Publish;
use CodeIgniter\Controller;
use App\Models\ProductsModels;




use CodeIgniter\Validation\Validation;

class Product extends Controller
{
   


    public function index()
    {
        if (!session()->has('login_user')) {
            return  redirect()->to(base_url() . 'user');
        }

        $productdata = new ProductsModels(); // create object

        $data['list_product'] =  $productdata->getData();

        return view('product', $data);
    }
}
