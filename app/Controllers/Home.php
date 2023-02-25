<?php

namespace App\Controllers;

use App\Models\UsersModels;

class Home extends BaseController
{
    public function index()
    {
        // $userdata = new UsersModels(); // create object

        // $data['users'] =  $userdata->getData();

        return view('welcome_message');
    }
}
