<?php

namespace App\Models;

use CodeIgniter\Model;

class inputModel extends Model
{

    protected $table = 'input_mahasiswa';
    protected $useTimestamps = true;
    protected $primaryKey = 'id';
    protected $allowedFields = ['nim', 'nama', 'kelas', 'email', 'no_hp', 'nama_lomba', 'kategori', 'bukti'];

    public function getInput($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id' => $id]);
        }
    }

    public function editInput($data, $id)
    {
        $builder = $this->db->table('input_mahasiswa')
            ->where('id', $id)
            ->update($data, $id);
        return $builder;
    }

    public function search($keyword)
    {
        $builder = $this->table('input_mahasiswa');
        // $builder->like('nama', $keyword);
        $builder->like('nama', $keyword);
        $builder->orLike('kelas', $keyword);
        return $builder;
    }
    public function kelas_mhs()
    {
        return $this->db->table('input_mahasiswa')
            ->select('count(*) as jumlah,  kelas')->groupBy('kelas')
            ->get()->getResultArray();
    }

    public function kategori_mahasiswa()
    {
        return $this->db->table('input_mahasiswa')
            ->select('count(*) as jumlah,  kategori')->groupBy('kategori')
            ->get()->getResultArray();
    }
    
}