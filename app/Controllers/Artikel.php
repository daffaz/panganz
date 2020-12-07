<?php

namespace App\Controllers;

use App\Models\ArtikelLawasModel;
use App\Models\ArtikelTerkiniModel;
use App\Models\ArtikelTrendingModel;

class Artikel extends BaseController
{
    public function __construct()
    {
        $this->lawasModel = new ArtikelLawasModel();
        $this->terkiniModel = new ArtikelTerkiniModel();
        $this->trendingModel = new ArtikelTrendingModel();
    }
    public function index()
    {
        echo view('header_v');
        echo view('artikel/artikel_v');
        echo view('footer_v');
    }
    public function trending()
    {
        $data['dataTrending'] = $this->trendingModel->findAll();

        echo view('header_v');
        echo view('artikel/artikel_trending_v', $data);
        echo view('footer_v');
    }
    public function terkini()
    {
        $data['dataTerkini'] = $this->terkiniModel->findAll();

        echo view('header_v');
        echo view('artikel/artikel_terkini_v', $data);
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
    public function detailTerkini($id)
    {
        $data['dataTerkiniAll'] = $this->terkiniModel->findAll();
        $data['dataTerkini'] = $this->terkiniModel->find($id);

        echo view('header_v');
        echo view('artikel/artikel_detail_terkini_v', $data);
        echo view('footer_v');
    }
    public function detailTrending($id)
    {
        $data['dataTrendingAll'] = $this->trendingModel->findAll();
        $data['dataTrending'] = $this->trendingModel->find($id);

        echo view('header_v');
        echo view('artikel/artikel_detail_trending_v', $data);
        echo view('footer_v');
    }

    //--------------------------------------------------------------------

}
