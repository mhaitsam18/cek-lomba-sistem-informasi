<?php

namespace App\Models;

use CodeIgniter\Model;

class prediksiModel extends Model
{

    protected $table = 'prediksi';
    protected $useTimestamps = true;
    protected $primaryKey = 'id';
    protected $allowedFields = ['id', 'link', 'judul', 'teks'];

    public function getInput($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id' => $id]);
        }
    }
}