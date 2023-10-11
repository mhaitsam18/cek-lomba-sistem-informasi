<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('layout/view_header');
        return view('pages/home');
        echo view('layout/footer');
        // echo "hello world";
        // echo view('layout/header');
        // echo view('pages/fungsionalitas');
        // echo view('layout/footer');
    }
}