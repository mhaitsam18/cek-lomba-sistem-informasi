<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\lombaModel;
use App\Controllers\BaseController;

class tambah_lomba extends BaseController
{
    protected $lombaModel;


    public function __construct()
    {
        $this->lombaModel = new lombaModel();
        // $this->load->helper("url");
    }
    public function index()
    {

        // d($this->request->getVar('keyword'));
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $orang = $this->lombaModel->search($keyword);
        } else {
            $orang = $this->lombaModel;
        }

        $getInput = $this->lombaModel->getInput()->getResultArray();

        $data = [
            'title' => 'Data Mahasiswa',
            // 'getInput' => $this->lombaModel->upcoming_lomba->getInput(),
            'getInput' => $getInput

        ];


        // $date = new \Datetime('now');



        // dd($date);
        // 'Deadline'  => $this->request->getPost('Deadline');
        // $date1 =  $this->request->getPost('Deadline');
        // $diffDays = $date->diff($date1)->format("%a");


        // dd($getInput);

        echo view('layout/header_atas');
        return view('pages/upcoming_lomba', $data, $getInput);
        echo view('layout/footer');
    }

    public function save()
    {


        $poster = $this->request->getFile('poster');
        if ($poster->getError() == 4) {
            $namaposter = '-';
        } else {
            $namaposter = $poster->getRandomName();
            $poster->move('poster', $namaposter);
        }

        $this->lombaModel->save([
            // 'nim' => $this->request->getVar('nim'),
            // 'nama' => $this->request->getVar('nama'),
            // 'kelas' => $this->request->getVar('kelas'),
            // 'email' => $this->request->getVar('email'),
            // 'no_hp' => $this->request->getVar('no_hp'),
            // 'nama_lomba' => $this->request->getVar('nama_lomba'),
            // 'kategori' => $this->request->getVar('kategori'),
            // 'bukti' => $namabukti

            'Title'             => $this->request->getPost('Title'),
            'Penyelenggara'     => $this->request->getPost('Penyelenggara'),
            'Deadline'      => $this->request->getPost('Deadline'),
            // 'poster'  => $this->request->getPost('poster')

            'poster' => $namaposter
        ]);
        return redirect()->to(('/upcoming_lomba'));
    }


    public function edit($id)
    {
        // dd($id);
        // $input = new lombaModel();
        // $getInput = $input->getInput($id)->getRow();
        // if (isset($getInput)) {

        //     $data['input'] = $getInput;
        //     $data['title']  = 'Edit ' . $getInput->title;
        //     // dd($getInput);

        //     echo view('layout/view_header', $data);
        //     echo view('pages/form_edit_input', $data);
        //     echo view('layout/footer', $data);
        // } else {

        //     echo '<script>
        //             alert("ID ' . $id . ' Tidak ditemukan");
        //             window.location="' . base_url('input') . '"
        //         </script>';

        // $id=$this->uri->segment(3);
        // $data=array(
        // 'project' => $this->m_inputactivity->get_project(),
        // 'status' => $this->m_inputactivity->get_activity(),
        // 'content' =>'activity/v_updateactivity'
        // );
        // $this->load->view('pages/popup_edit_lomba', $data);
        echo view('pages/popup_edit_lomba');
        // }
    }


    public function update()
    {
        $model = new lombaModel();
        $id = $this->request->getPost('id');
        // dd($id);
        $data = array(
            'Title'    => $this->request->getPost('Title'),
            'Penyelenggara'   => $this->request->getPost('Penyelenggara'),
            'Deadline'  => $this->request->getPost('Deadline'),
            'poster'  => $this->request->getPost('poster')

        );
        $model->editInput($data, $id);
        echo '<script>
                alert("Sukses Edit Data Mahasiswa");
                window.location="' . base_url('input') . '"
            </script>';
    }

    public function delete($id)
    {
        $this->lombaModel->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil di Hapus.');
        return redirect()->to('/admin');
    }

    public function tambah_lomba()
    {
        echo view('layout/header_atas');
        return view('pages/tambah_lomba');
        echo view('layout/footer');
    }
}