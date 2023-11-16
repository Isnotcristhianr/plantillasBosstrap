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
        //header
        return view('layoutAdmin/header')
            //sidebar
            . view('layoutAdmin/sidebar')
            //topbar
            . view('layoutAdmin/topbar')
            //content
            . view('layoutAdmin/content')
            //footer
            . view('layoutAdmin/footer');
    }
}
