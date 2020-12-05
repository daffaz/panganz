<?php

namespace App\Controllers;

use App\Models\AcaraModel;

class Acara extends BaseController
{
    public function __construct()
    {
        $this->acaraModel = new AcaraModel();
    }
    public function index()
    {
        $data['dataAcara'] = $this->acaraModel->findAll();

        echo view('header_v');
        echo view('acara/acara_v', $data);
        echo view('footer_v');
    }
    public function detail($id)
    {
        $data['dataAcara'] = $this->acaraModel->find($id);

        echo view('header_v');
        echo view('acara/acara_detail_v', $data);
        echo view('footer_v');
    }

    //--------------------------------------------------------------------

}
