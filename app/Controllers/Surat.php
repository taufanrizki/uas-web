<?php

namespace App\Controllers;

use App\Models\Surat_model;

class Surat extends BaseController
{
    private $suratModel;

    public function __construct()
    {
        $this->suratModel = new Surat_model();
    }


    public function index()
    {
        $data['surat'] = $this->suratModel->get_surat();
        return view('surat/index', $data);
    }

    public function create()
    {
        // Form untuk membuat data baru
        helper('form');
        return view('surat/create');
    }

    public function store()
    {
        // menampilkan data yg telah dibuat
        $data = [
            'Tanggal_Kirim_Surat' => $this->request->getPost('Tanggal_Kirim_Surat'),
            'Nomor_Kirim_Surat' => $this->request->getPost('Nomor_Kirim_Surat'),
            'Perihal' => $this->request->getPost('Perihal'),
            'Tujuan_Surat' => $this->request->getPost('Tujuan_Surat'),
            'Tanda_Tangan_Penerima' => $this->request->getPost('Tanda_Tangan_Penerima'),
            'Keterangan' => $this->request->getPost('Keterangan')
        ];

        $this->suratModel->insert_surat($data);
        return redirect()->to('surat');
    }

    public function edit($id)
    {
        // Form untuk edit data
        $data['surat'] = $this->suratModel->where('No', $id)->first();
        return view('surat/edit', $data);
    }

    public function update($id)
    {
        // menyipan data yang di edit
        $data = [
            'Tanggal_Kirim_Surat' => $this->request->getPost('Tanggal_Kirim_Surat'),
            'Nomor_Kirim_Surat' => $this->request->getPost('Nomor_Kirim_Surat'),
            'Perihal' => $this->request->getPost('Perihal'),
            'Tujuan_Surat' => $this->request->getPost('Tujuan_Surat'),
            'Tanda_Tangan_Penerima' => $this->request->getPost('Tanda_Tangan_Penerima'),
            'Keterangan' => $this->request->getPost('Keterangan')
        ];

        $this->suratModel->update_surat($data, $id);
        return redirect()->to('surat');
    }

    public function delete($id)
    {
        // Delete data
        $this->suratModel->delete_surat($id);
        return redirect()->to('surat');
    }
}
