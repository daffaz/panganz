<?php

namespace App\Controllers;

use App\Models\AcaraModel;
use App\Models\KontakModel;

class Form extends BaseController
{
    public function __construct()
    {
        $this->acaraModel = new AcaraModel();
        $this->kontakModel = new KontakModel();
    }
    public function index()
    {
        $data['dataAcara'] = $this->acaraModel->findAll();

        echo view('header_v');
        echo view('form/form_v', $data);
        echo view('footer_v');
    }
    public function send()
    {
        $data = [
            "namaDepan" => $this->request->getPost('nama-depan'),
            "namaBelakang" => $this->request->getPost('nama-belakang'),
            "email" => $this->request->getPost('email'),
            "nomorTelepon" => $this->request->getPost('nomor-telepon'),
            // 'acara' => $this->acaraModel->
        ];
        // print_r($this->acaraModel);
        // die;
        $response = $this->kontakModel->insert($data);
        return redirect()->to(base_url('acara'));
    }
}
