<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
    
    public function Home(): string
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
