<?php

namespace App\Controllers\ControllerAdmin;

use App\Controllers\BaseController;

use CodeIgniter\Controller;

class loginController extends BaseController
{

    public function login(): string
    {
        //header
        return view('layoutAdmin/header')
            //login
            . view('FormLogin')
            //footer
            . view('layoutAdmin/footer');
    }

    public function inicio(): string
    {

        //capturar datos del formulario get
        $email = $_GET['email'];
        $password = $_GET['pass'];

        //guardar
        $resp = [
            'email' => $email,
            'password' => $password
        ];

        //header
        return view('layoutAdmin/header')
            //sidebar
            . view('layoutAdmin/sidebar')
            //topbar
            . view('layoutAdmin/topbar')
            //content
            . view('layoutAdmin/content' . $resp)
            //footer
            . view('layoutAdmin/footer');
    }
}
