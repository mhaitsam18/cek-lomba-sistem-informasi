<?php

namespace App\Models;

use CodeIgniter\Model;

class lombaModel extends Model
{

    protected $table = 'lomba';
    protected $useTimestamps = true;
    protected $primaryKey = 'id';
    protected $allowedFields = ['id', 'poster', 'Title', 'link', 'Penyelenggara', 'Deadline', 'counting_day'];
    // protected $getInput = new lombaModel();



    // public function getInput($id = false)
    // {

    //     if ($id === false) {
    //         return $this->findAll();
    //     } else {
    //         return $this->getWhere(['id' => $id]);
    //     }
    // }

    public function editInput($data, $id)
    {
        $builder = $this->db->table($this->table);
        $builder->where('id', $id);
        return $builder->update($data, $id);
    }

    public function search($keyword)
    {
        $builder = $this->table('lomba');
        // $builder->like('nama', $keyword);
        $builder->like('title', $keyword);
        $builder->orLike('Penyelenggara', $keyword);
        return $builder;
    }

    // public function datatanggal($id)
    // {
    //     $where = "id = " . $id ;
    //     $builder = $this->table('lomba')
    //         ->select('TIMESTAMPDIFF(day, Deadline, curdate())')
    //         ->where()
    //         ->get();
    //     return $builder;
    // }

    public function getInput($id = false)
    {

        if ($id === false) {
            return $this->table('lomba')
            ->select('id, TIMESTAMPDIFF(day, curdate(), Deadline) "curdate", Title, link, Penyelenggara, Deadline')
            ->get();
        } else {
            return $this->getWhere(['id' => $id]);
        }
    }
}