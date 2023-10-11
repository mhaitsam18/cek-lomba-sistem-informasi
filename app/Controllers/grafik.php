<?php

namespace App\Controllers;



use App\Controllers\BaseController;
use App\Models\inputModel;

class grafik extends BaseController
{
    public function __construct()
    {
        $this->grafik = new inputModel();
    }

    public function index()
    {

        $data = [
            'title' => "Grafik",
            'kategori_mahasiswa' => $this->grafik->kategori_mahasiswa(),
            'kelas_mhs' => $this->grafik->kelas_mhs(),


        ];

        echo view('pages/grafik', $data);
    }
}