<?php

namespace App\Models;

use CodeIgniter\Model;

class Surat_model extends Model
{
    protected $table = 'surat';
    protected $primaryKey = 'No';
    protected $allowedFields = ['Tanggal_Kirim_Surat', 'Nomor_Kirim_Surat', 'Perihal', 'Tujuan_Surat', 'Tanda_Tangan_Penerima', 'Keterangan'];

    public function get_surat()
    {
        return $this->findAll();
    }

    public function insert_surat($data)
    {
        $this->insert($data);
        return $this->insertID;
    }

    public function update_surat($data, $id)
    {
        $this->update($id, $data);
    }

    public function delete_surat($id)
    {
        $this->delete($id);
    }
}
