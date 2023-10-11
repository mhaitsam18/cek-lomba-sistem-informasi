<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\prediksiModel;
use App\Models\lombaModel;
use App\Controllers\BaseController;

class prediksi extends BaseController
{
    protected $prediksiModel;

    public function __construct()
    {
        $this->prediksiModel = new prediksiModel();
        $this->lombaModel = new lombaModel();
    }
    public function index()
    {

        $data = [
            'title' => 'PREDIKSI',
            'getInput' => $this->prediksiModel->getInput()
        ];

        return view('pages/prediksi', $data);
        echo view('layout/footer');
    }

    public function save()
    {


        $this->lombaModel->save([
            'link' => $this->request->getVar('link'),
            'judul' => $this->request->getVar('judul'),
            // 'teks' => $this->request->getVar('teks'),

        ]);
        return panggil_model();

        // return redirect()->to(base_url('/'));
    }

    public function panggil_model()
    {
        // $this->lombaModel->save([
        //     'link' => $this->request->getPost('link'),
        //     'judul' => $this->request->getPost('judul')
        //     // 'teks' => $this->request->getVar('teks'),
        // ]);

        // $perintah = "C:\\Users\\Dinda Nabila\\AppData\\Local\\Programs\\Python\Python38\\python.exe D:\\xampp\\htdocs\\bismillah_pa\\validasi.py";
        $perintah = "python D:\\xampp\\htdocs\\bismillah_pa\\public\\validasi.py";
        // if (isset($_POST['submit'])) {
        //     $link = $_POST['link'];
        //     $judul = $_POST['judul'];
        //     $teks = $_POST['teks'];
        //     $sql = "INSERT INTO prediksi (link,judul,teks)
        //     VALUES ('$link','$judul','$teks')";
        $output = shell_exec($perintah);

        if ($this->request->getPost('link') != null || $this->request->getPost('judul') != null) {

            // echo "New record has been added successfully !";
            $output = shell_exec($perintah);
            // $output = panggil_model();
            echo 'Hasil prediksi: ' . $output;
        } else {
            echo "Error: lagi";
        }
        // mysqli_close($conn);

        return "$output";
        dd($output);
        $output = panggil_model();
        // echo 'Hasil prediksi: '.$output; 

    }
}