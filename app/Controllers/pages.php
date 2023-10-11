<?php

namespace App\Controllers;

use App\Models\inputModel;

class Pages extends BaseController
{

    public function __construct()
    {
        $this->inputModel = new inputModel();
    }

    public function index()
    {
        echo view('layout/view_header');
        echo view('pages/home');
        echo view('layout/footer');
    }
    public function fungsionalitas()
    {
        echo view('layout/header_atas');
        echo view('pages/fungsionalitas');
        echo view('layout/footer');
    }
    public function prediksi()
    {
        echo view('layout/header_atas');
        echo view('pages/prediksi');
        echo view('layout/footer');
    }
    public function input_mahasiswa()
    {
        echo view('layout/header_atas');
        echo view('pages/input_mahasiswa');
        echo view('layout/footer');
    }
    public function mahasiswa_view()
    {
        $data = [
            'title' => 'Data Mahasiswa',
            'getInput' => $this->inputModel->getInput()
        ];

        echo view('layout/header_atas');
        echo view('pages/mahasiswa_view', $data);
        echo view('layout/footer');
    }

    public function upcoming_lomba()
    {
        echo view('layout/header_atas');
        echo view('pages/upcoming_lomba');
        echo view('layout/footer');
    }
}