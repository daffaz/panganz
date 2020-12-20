<?php

namespace App\Controllers;

use App\Models\AcaraModel;
use App\Models\ArtikelTrendingModel;

class SangatRahasia extends BaseController
{
    public function __construct()
    {
        $this->adminAcaraModel = new AcaraModel();
        $this->adminArtikelTrendingModel = new ArtikelTrendingModel();
    }
    public function index()
    {
        echo view('admin/admin_header_v');
        echo view('admin/admin_sidebar_v');
        echo view('admin/admin_topbar_v');
        echo view('admin/admin_body_v');
        echo view('admin/admin_footer_v.php');
    }
    public function adminAcara()
    {
        $data['dataAcara'] = $this->adminAcaraModel->findAll();

        echo view('admin/admin_header_v');
        echo view('admin/admin_sidebar_v');
        echo view('admin/admin_topbar_v');
        echo view('admin/acara/admin_acara_v', $data);
        echo view('admin/admin_footer_v.php');
    }
    public function adminArtikelTrending()
    {
        $data['dataTrending'] = $this->adminArtikelTrendingModel->findAll();

        echo view('admin/admin_header_v');
        echo view('admin/admin_sidebar_v');
        echo view('admin/admin_topbar_v');
        echo view('admin/artikel/admin_artikel_trending_v', $data);
        echo view('admin/admin_footer_v.php');
    }
}
