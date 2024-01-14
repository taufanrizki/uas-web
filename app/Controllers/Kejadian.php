<?php

namespace App\Controllers;

use App\Models\Kejadian_model;

class Kejadian extends BaseController
{
    private $kejadianModel;

    public function __construct()
    {
        $this->kejadianModel = new Kejadian_model();
    }

    public function index()
    {
        $data['kejadian_list'] = $this->kejadianModel->getKejadian();
        return view('kejadian/index', $data);
    }

    public function create()
    {
        if ($this->request->getMethod() === 'post') {
            $rules = [
                'tanggal_kejadian' => 'required',
                'pelapor' => 'required',
                'tempat_kejadian' => 'required',
                'jenis_kejadian' => 'required',
                'petugas' => 'required',
                'penyebab' => 'required',
                'akibat' => 'required',
                'kerugian' => 'required',
                'solusi' => 'required',
                'hasil' => 'required',
                'keterangan' => 'required',
            ];

            if (!$this->validate($rules)) {
                return view('kejadian/create');
            }

            $this->kejadianModel->addKejadian($this->request->getPost());
            return redirect()->to('kejadian/index');
        } else {
            return view('kejadian/create');
        }
    }

    public function edit($no)
    {
        if ($this->request->getMethod() === 'post') {
            $rules = [
                'tanggal_kejadian' => 'required',
                'pelapor' => 'required',
                'tempat_kejadian' => 'required',
                'jenis_kejadian' => 'required',
                'petugas' => 'required',
                'penyebab' => 'required',
                'akibat' => 'required',
                'kerugian' => 'required',
                'solusi' => 'required',
                'hasil' => 'required',
                'keterangan' => 'required',
            ];

            if (!$this->validate($rules)) {
                $data['kejadian'] = $this->kejadianModel->getKejadianByNo($no);
                return view('kejadian/edit', $data);
            }

            $this->kejadianModel->updateKejadian($no, $this->request->getPost());
            return redirect()->to('kejadian/index');
        } else {
            $data['kejadian'] = $this->kejadianModel->getKejadianByNo($no);
            return view('kejadian/edit', $data);
        }
    }

    public function delete($no)
    {
        $this->kejadianModel->deleteKejadian($no);
        return redirect()->to('kejadian/index');
    }
}
