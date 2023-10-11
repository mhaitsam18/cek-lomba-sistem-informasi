<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\inputModel;
use App\Models\lombaModel;
use App\Controllers\BaseController;
use DateTime;

class admin extends BaseController
{
    protected $inputModel;
    protected $lombaModel;

    public function __construct()
    {
        $this->inputModel = new inputModel();
        $this->lombaModel = new lombaModel();
        $this->grafik = new inputModel();

        // $this->load->helper('url');
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
            'getInput' => $this->inputModel->getInput(),
            'kelas_mhs' => $this->inputModel->kelas_mhs(),
            'kategori_mahasiswa' => $this->inputModel->kategori_mahasiswa(),


        ];

        // $getInput = [
        //     'getInput' => $getInput
        // ];

        // echo view('layout/header_admin');
        echo view('pages/admin_view_datamhs', $data);
        // // // echo view('pages/prediksi');
        // // // echo view('pages/admin_upcoming_lomba', $data, $data2, $getInput);
        // echo view('pages/grafik', $data);
        // echo view('layout/footer');
        // echo view('pages/admin');
    }
    public function grafik()
    {
        $this->grafik = new inputModel();
        $data = [
            'title' => "Grafik",
            'kategori_mahasiswa' => $this->grafik->kategori(),
            'kelas_mhs' => $this->grafik->kelas(),

        ];

        echo view('pages/grafik', $data);
    }
    public function admin_view_lomba()
    {
        $data = [
            'title' => 'Data Mahasiswa',
            'getInput' => $this->inputModel->getInput()->getResultArray(),
            'kelas_mhs' => $this->inputModel->kelas_mhs(),
            // 'tgl' => $tanggal,
            'kategori_mahasiswa' => $this->inputModel->kategori_mahasiswa(),
        ];

        echo view('pages/admin_upcoming_lomba', $data);
    }

    public function admin_view_datamhs()
    {
        echo view('pages/admin_view_datamhs');
    }

    public function tambah_lomba()
    {
        $getInput = $this->lombaModel->findAll();
        $no = 0;
        $tanggalraw = [];
        foreach ($getInput as $lom) {
            $no++;
            array_push($tanggalraw, $getInput[$no - 1]['id']);
        }
        // $tanggal = $this->lombaModel->datatanggal($tanggalraw)->getResultArray();
        // var_dump($getInput);
        
        // $tanggals = $this->lombaModel->datatanggal();
        $data = [
            'getInput' => $this->lombaModel->getInput()->getResultArray(),
            // 'tanggal' => $tanggal,
            // 'tgl' => $tanggals,
            // 'getInput' => $this->lombaModel->getInput()
            // 'getInput' => $getInput
        ];
        // echo view('layout/header_admin');
        return view('pages/admin_upcoming_lomba', $data);
    }
    public function input_lomba()
    {
        echo view('layout/header_admin');
        echo view('/pages/input_lomba');
        echo view('layout/footer');
    }

    public function counting_day($deadline, $endDate)
    {
        // $model = new lombaModel();

        $deadline = $_POST['deadline'];
        $endDate = date("d-m-Y");


        $fromDate = new DateTime($deadline);
        $todate = new DateTime($endDate);

        echo $fromDate->diff($todate)->days;
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
        return redirect()->to(('/admin'));
    }
    public function scrape_lomba()
    {
    }

    public function save_lomba()
    {

        // $poster = $this->request->getFile('poster');
        // if ($poster->getError() == 4) {
        //     $nama_poster = '-';
        // } else {
        //     $nama_poster = $poster->getRandomName();
        //     $poster->move('bukti', $poster);
        // }

        $this->lombaModel = new lombaModel();
        $this->lombaModel->save([
            'Title' => $this->request->getVar('Title'),
            'link' => $this->request->getVar('link'),
            'Penyelenggara' => $this->request->getVar('Penyelenggara'),
            'Deadline' => $this->request->getVar('Deadline'),
            'Counting Day' => $this->request->getVar('Counting Day'),
            // 'poster' => $nama_poster
        ]);
        return redirect()->to(('/admin/tambah_lomba'));
    }


    public function edit($id)
    {
        $getInput = $this->lombaModel->findAll();
        // dd($id);

        $input = new inputModel();
        $getInput = $input->getInput($id)->getRow();
        if (isset($getInput)) {

            $data['input'] = $getInput;
            $data['title']  = 'Edit ' . $getInput->nama;
            // dd($getInput);

            echo view('layout/header_atas', $data);
            echo view('pages/form_edit_input', $data);
            echo view('layout/footer', $data);
        } else {

            echo '<script>
                    alert("ID ' . $id . ' Tidak ditemukan");
                    window.location="' . base_url('admin') . '"
                </script>';
        }
    }


    public function update()
    {
        // var_dump($this->request->getPost());
        // $model = new inputModel();
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
        $this->inputModel->update($id, $data);
        echo '<script>
                alert("Sukses Edit Data Mahasiswa");
                window.location="' . base_url('admin') . '"
            </script>';
    }
    public function delete($id)
    {
        $this->inputModel->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil di Hapus.');
        return redirect()->to('/admin');
    }

    public function edit_lomba($id)
    {
        // dd($id);
        $getInput = $this->lombaModel->findAll();
        $data = [
            'getInput' => $this->lombaModel->getInput(),
            // 'getInput' => $this->lombaModel->getInput()
            'getInput' => $getInput
        ];

        $input = new lombaModel();
        $getInput = $input->getInput($id)->getRow();
        if (isset($getInput)) {

            $data['input'] = $getInput;
            // $data['title']  = 'Edit ' . $getInput->title;
            // dd($getInput);

            echo view('layout/header_admin', $data);
            echo view('pages/form_edit_lomba', $data);
            echo view('layout/footer', $data);
        } else {

            echo '<script>
                    alert("ID ' . $id . ' Tidak ditemukan");
                    window.location="' . base_url('admin') . '"
                </script>';
        }
    }


    public function update_lomba()
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
                window.location="' . base_url('admin/tambah_lomba') . '"
            </script>';
    }
    public function delete_lomba($id)
    {
        $this->lombaModel->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil di Hapus.');
        return redirect()->to('/admin/tambah_lomba');
    }
}