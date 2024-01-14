<?php

namespace App\Models;

use CodeIgniter\Model;

helper('form');

class Kejadian_model extends Model
{

    protected $table = 'kejadian';
    protected $primaryKey = 'no';
    protected $allowedFields = ['tanggal_kejadian', 'pelapor', 'tempat_kejadian', 'jenis_kejadian', 'petugas', 'penyebab', 'akibat', 'kerugian', 'solusi', 'hasil', 'keterangan'];

    public function getKejadian()
    {
        // Fetch all kejadian records from the database
        return $this->findAll();
    }

    public function getKejadianByNo($no)
    {
        // Fetch kejadian record from the database based on the $no
        return $this->find($no);
    }

    public function addKejadian($data)
    {
        // Insert new kejadian record into the database
        $this->insert($data);
    }

    public function updateKejadian($no, $data)
    {
        // Update kejadian record in the database based on the $no
        $this->update($no, $data);
    }

    public function deleteKejadian($no)
    {
        // Delete kejadian record from the database based on the $no
        $this->delete($no);
    }
}
