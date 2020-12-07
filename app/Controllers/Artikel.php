<?php

namespace App\Controllers;

use App\Models\ArtikelLawasModel;

class Artikel extends BaseController
{
    public function __construct()
    {
        $this->lawasModel = new ArtikelLawasModel();
    }
    public function index()
    {
        echo view('header_v');
        echo view('artikel/artikel_v');
        echo view('footer_v');
    }
    public function trending()
    {
        echo view('header_v');
        echo view('artikel/artikel_trending_v');
        echo view('footer_v');
    }
    public function terkini()
    {
        echo view('header_v');
        echo view('artikel/artikel_terkini_v');
        echo view('footer_v');
    }
    public function lawas()
    {
        $data['dataLawas'] = $this->lawasModel->findAll();

        echo view('header_v');
        echo view('artikel/artikel_lawas_v', $data);
        echo view('footer_v');
    }
    public function detailLawas($id)
    {
        $data['dataLawasAll'] = $this->lawasModel->findAll();
        $data['dataLawas'] = $this->lawasModel->find($id);

        echo view('header_v');
        echo view('artikel/artikel_detail_lawas_v', $data);
        echo view('footer_v');
    }

    //--------------------------------------------------------------------

}
