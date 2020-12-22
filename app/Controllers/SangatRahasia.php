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
        $this->session = \Config\Services::session();
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
        $data['session'] = $this->session->getFlashdata('response');
        $data['dataAcara'] = $this->adminAcaraModel->findAll();
        $test['judul'] = "Acara";

        echo view('admin/admin_header_v');
        echo view('admin/admin_sidebar_v', $test);
        echo view('admin/admin_topbar_v');
        echo view('admin/acara/admin_acara_v', $data);
        echo view('admin/admin_footer_v.php');
    }
    public function adminTambahAcara()
    {
        $id = $this->request->getPost('id');

        $data = [
            "acara" => $this->request->getPost('acara'),
            "judul" => $this->request->getPost('judul'),
            "konten" => $this->request->getPost('konten'),
            "harga" => strtoupper($this->request->getPost('harga')),
        ];
        if (empty($id)) {
            $response = $this->adminAcaraModel->insert($data);
            if ($response) {
                $this->session->setFlashdata('response', ['status' => $response, 'message' => 'Acara berhasil ditambahkan.']);
            } else {
                $this->session->setFlashdata('response', ['status' => $response, 'message' => 'Acara gagal ditambahkan. ']);
            }
        } else {
            $response = $this->adminAcaraModel->update($id, $data);
        }
        return redirect()->to(base_url('SangatRahasia/adminAcara'));
    }
    public function adminDeleteAcara($id)
    {
        $response = $this->adminAcaraModel->delete($id);
        return redirect()->to(base_url('SangatRahasia/adminAcara'));
    }
    // END OF ACARA
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
    public function adminTambahArtikelTrending()
    {
        $id = $this->request->getPost('id');

        $data = [
            "judul" => $this->request->getPost('judul'),
            "organisasi" => $this->request->getPost('organisasi'),
            "nama" => $this->request->getPost('nama'),
            "berita" => $this->request->getPost('berita1'),
            "berita2" => $this->request->getPost('berita2'),
            "gambar" => $this->request->getPost('gambar'),
            "tanggal" => date('Y-m-d')
        ];
        if (empty($id)) {
            $response = $this->adminArtikelTrendingModel->insert($data);
        } else {
            $response = $this->adminArtikelTrendingModel->update($id, $data);
        }
        return redirect()->to(base_url('SangatRahasia/adminArtikelTrending'));
    }
    public function adminEditTrending($id)
    {
        $data['dataTrending'] = $this->adminArtikelTrendingModel->findAll();
        $data['dataTrendingEdit'] = $this->adminArtikelTrendingModel->find($id);
        $test['judul'] = "Artikel Trending";

        echo view('admin/admin_header_v');
        echo view('admin/admin_sidebar_v');
        echo view('admin/admin_topbar_v', $test);
        echo view('admin/artikel/admin_artikel_trending_v', $data);
        echo view('admin/admin_footer_v.php');
    }
    public function adminDeleteTrending($id)
    {
        $response = $this->adminArtikelTrendingModel->delete($id);
        return redirect()->to(base_url('SangatRahasia/adminArtikelTrending'));
    }
    // ====== END OF ARTIKEL TRENDING ========
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
    public function adminTambahArtikelTerkini()
    {
        $id = $this->request->getPost('id');

        $data = [
            "judul" => $this->request->getPost('judul'),
            "organisasi" => $this->request->getPost('organisasi'),
            "nama" => $this->request->getPost('nama'),
            "berita" => $this->request->getPost('berita1'),
            "berita2" => $this->request->getPost('berita2'),
            "gambar" => $this->request->getPost('gambar'),
            "tanggal" => date('Y-m-d')
        ];
        if (empty($id)) {
            $response = $this->adminArtikelTerkiniModel->insert($data);
        } else {
            $response = $this->adminArtikelTerkiniModel->update($id, $data);
        }
        return redirect()->to(base_url('SangatRahasia/adminArtikelTerkini'));
    }
    public function adminDeleteTerkini($id)
    {
        $response = $this->adminArtikelTerkiniModel->delete($id);
        return redirect()->to(base_url('SangatRahasia/adminArtikelTerkini'));
    }
    // ====== END OF ARTIKEL TERKINI ========
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
    public function adminTambahArtikelLawas()
    {
        $id = $this->request->getPost('id');

        $data = [
            "judul" => $this->request->getPost('judul'),
            "organisasi" => $this->request->getPost('organisasi'),
            "nama" => $this->request->getPost('nama'),
            "berita" => $this->request->getPost('berita1'),
            "berita2" => $this->request->getPost('berita2'),
            "gambar" => $this->request->getPost('gambar'),
            "tanggal" => date('Y-m-d')
        ];
        if (empty($id)) {
            $response = $this->adminArtikelLawasModel->insert($data);
        } else {
            $response = $this->adminArtikelLawasModel->update($id, $data);
        }
        return redirect()->to(base_url('SangatRahasia/adminArtikelLawas'));
    }
    public function adminDeleteLawas($id)
    {
        $response = $this->adminArtikelLawasModel->delete($id);
        return redirect()->to(base_url('SangatRahasia/adminArtikelLawas'));
    }
}
