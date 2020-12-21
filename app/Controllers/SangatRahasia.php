<?php

namespace App\Controllers;

use App\Models\AcaraModel;
use App\Models\ArtikelTrendingModel;
use App\Models\ArtikelTerkiniModel;
use App\Models\ArtikelLawasModel;

class SangatRahasia extends BaseController
{
    public function __construct()
    {
        $this->adminAcaraModel = new AcaraModel();
        $this->adminArtikelTrendingModel = new ArtikelTrendingModel();
        $this->adminArtikelTerkiniModel = new ArtikelTerkiniModel();
        $this->adminArtikelLawasModel = new ArtikelLawasModel();
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
        $test['judul'] = "Acara";

        echo view('admin/admin_header_v');
        echo view('admin/admin_sidebar_v', $test);
        echo view('admin/admin_topbar_v');
        echo view('admin/acara/admin_acara_v', $data);
        echo view('admin/admin_footer_v.php');
    }
    public function adminArtikelTrending()
    {
        $data['dataTrending'] = $this->adminArtikelTrendingModel->findAll();
        $test['judul'] = "Artikel Trending";

        echo view('admin/admin_header_v');
        echo view('admin/admin_sidebar_v');
        echo view('admin/admin_topbar_v', $test);
        echo view('admin/artikel/admin_artikel_trending_v', $data);
        echo view('admin/admin_footer_v.php');
    }
    public function adminArtikelTerkini()
    {
        $data['dataTerkini'] = $this->adminArtikelTerkiniModel->findAll();
        $test['judul'] = "Artikel Terkini";

        echo view('admin/admin_header_v');
        echo view('admin/admin_sidebar_v');
        echo view('admin/admin_topbar_v', $test);
        echo view('admin/artikel/admin_artikel_terkini_v', $data);
        echo view('admin/admin_footer_v.php');
    }
    public function adminArtikelLawas()
    {
        $data['dataLawas'] = $this->adminArtikelLawasModel->findAll();
        $test['judul'] = "Artikel Lawas";

        echo view('admin/admin_header_v');
        echo view('admin/admin_sidebar_v');
        echo view('admin/admin_topbar_v', $test);
        echo view('admin/artikel/admin_artikel_lawas_v', $data);
        echo view('admin/admin_footer_v.php');
    }
}
