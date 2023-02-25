<?php

namespace App\Controllers;

use App\Models\UsersModels;
use CodeIgniter\Commands\Utilities\Publish;
use CodeIgniter\Controller;


use CodeIgniter\Validation\Validation;

class User extends Controller
{
    public $userModel;
    public $session;

    public function __construct()
    {
        helper('form');
        $this->userModel = new UsersModels();
        $this->session = session();
    }

    public function index()
    {
        return view('login');
    }

    public function login()
    {

        $data = [];

        $validation =  \Config\Services::validation();

        $rules = [
            'username' => [
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => '* Tên đăng nhập không được trống',
                    'numeric' => '* Tên đăng nhập là số điện thoại',
                ],
            ],

            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '* Mật khẩu không được trống',
                    'exact_length' => '* Mật khẩu tối thiểu dài 8 ký tự',
                ],
            ],
        ];

        // Đặt quy tắc validation cho đối tượng validation
        $validation->setRules($rules);

        // Lấy dữ liệu đầu vào từ form
        $data = $this->request->getPost(); // request->getPost('username');

        // Thực hiện validation
        if (!$validation->run($data)) {

            // Nếu có lỗi, hiển thị danh sách lỗi
            $data['validation_errors'] = $validation->listErrors();
        } else {

            // Nếu không có lỗi, xử lý dữ liệu form
            $phonenumber = $this->request->getVar('username');
            $password = $this->request->getVar('password');


            $userdata = $this->userModel->verifyAcount($phonenumber);
            $userpass = $this->userModel->verifyPass(md5($password));

            if ($userdata) {
                if ($userpass) {
                    $this->session->set('login_user', true);
                    return  redirect()->to(base_url() . 'product');
                } else {
                    $data['verify_error'] = '* Mật khẩu đăng nhập không đúng';
                }
            } else {
                $data['verify_error'] = '* Tên đăng nhập không đúng';
                //return redirect()->to(current_url());
            }
        }
        echo view('login', $data);
    }
}
