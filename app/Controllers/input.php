<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\inputModel;
use App\Controllers\BaseController;

class input extends BaseController
{
    protected $inputModel;

    public function __construct()
    {
        $this->inputModel = new inputModel();
    }
    public function index()
    {

        // d($this->request->getVar('keyword'));
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $orang = $this->inputModel->search($keyword);
        } else {
            $orang = $this->inputModel;
        }

        $data = [
            'title' => 'Data Mahasiswa',
            'getInput' => $this->inputModel->getInput()
        ];
        echo view('layout/header_atas');
        echo view('pages/mahasiswa_view', $data);
        echo view('layout/footer');
    }

    public function save()
    {


        $bukti = $this->request->getFile('bukti');
        if ($bukti->getError() == 4) {
            $namabukti = '-';
        } else {
            $namabukti = $bukti->getRandomName();
            $bukti->move('bukti', $namabukti);
        }

        $this->inputModel->save([
            'nim' => $this->request->getVar('nim'),
            'nama' => $this->request->getVar('nama'),
            'kelas' => $this->request->getVar('kelas'),
            'email' => $this->request->getVar('email'),
            'no_hp' => $this->request->getVar('no_hp'),
            'nama_lomba' => $this->request->getVar('nama_lomba'),
            'kategori' => $this->request->getVar('kategori'),
            'bukti' => $namabukti
        ]);
        return redirect()->to(('/input'));
    }


    public function edit($id)
    {
        // dd($id);
        $input = new inputModel();
        $getInput = $input->getInput($id)->getRow();
        if (isset($getInput)) {

            $data['input'] = $getInput;
            $data['title']  = 'Edit ' . $getInput->nama;
            // dd($getInput);

            echo view('layout/view_header', $data);
            echo view('pages/form_edit_input', $data);
            echo view('layout/footer', $data);
        } else {

            echo '<script>
                    alert("ID ' . $id . ' Tidak ditemukan");
                    window.location="' . base_url('input') . '"
                </script>';
        }
    }


    public function update()
    {
        $model = new inputModel();
        $id = $this->request->getPost('id');
        // dd($id);
        $data = array(
            'nim'    => $this->request->getPost('nim'),
            'nama'   => $this->request->getPost('nama'),
            'kelas'  => $this->request->getPost('kelas'),
            'email'  => $this->request->getPost('email'),
            'no_hp'    => $this->request->getPost('no_hp'),
            'kategori'  => $this->request->getPost('kategori'),
            'kategori'  => $this->request->getPost('kategori'),
        );
        $model->editInput($data, $id);
        echo '<script>
                alert("Sukses Edit Data Mahasiswa");
                window.location="' . base_url('input') . '"
            </script>';
    }

    public function delete($id)
    {
        $this->inputModel->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil di Hapus.');
        return redirect()->to('/admin');
    }
}