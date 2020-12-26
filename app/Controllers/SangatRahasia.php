<?php

namespace App\Controllers;

use App\Models\AcaraModel;
use App\Models\ArtikelTrendingModel;
use App\Models\ArtikelTerkiniModel;
use App\Models\ArtikelLawasModel;
use App\Models\KontakModel;


class SangatRahasia extends BaseController
{
    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->config = config('Auth');
        $this->auth = service('authentication');

        $this->adminAcaraModel = new AcaraModel();
        $this->adminArtikelTrendingModel = new ArtikelTrendingModel();
        $this->adminArtikelTerkiniModel = new ArtikelTerkiniModel();
        $this->adminArtikelLawasModel = new ArtikelLawasModel();
        $this->adminKontak = new KontakModel();
    }
    public function index()
    {
        if (!$this->auth->check()) {
            $redirectURL = session('redirect_url') ?? base_url('/SangatRahasia');
            unset($_SESSION['redirect_url']);

            return redirect()->to($redirectURL);
        }
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
        $test['link'] = base_url('acara');

        echo view('admin/admin_header_v');
        echo view('admin/admin_sidebar_v', $test);
        echo view('admin/admin_topbar_v');
        echo view('admin/acara/admin_acara_v', $data);
        echo view('admin/admin_footer_v.php');
    }
    public function adminUser()
    {
        $data['session'] = $this->session->getFlashdata('response');
        $data['dataAcara'] = $this->adminKontak->findAll();
        $test['judul'] = "Users";
        $test['link'] = base_url('acara');

        echo view('admin/admin_header_v');
        echo view('admin/admin_sidebar_v', $test);
        echo view('admin/admin_topbar_v');
        echo view('admin/user/user_v', $data);
        echo view('admin/admin_footer_v.php');
    }
    public function adminDeleteUser($id)
    {
        $response = $this->adminKontak->delete($id);
        // var_dump($response);
        if ($response->resultID) {
            $this->session->setFlashdata('response', ['status' => $response, 'message' => 'User berhasil dihapus.']);
        } else {
            $this->session->setFlashdata('response', ['status' => $response, 'message' => 'User gagal dihapus. ' . $response->connID->error]);
        }

        return redirect()->to(base_url('SangatRahasia/adminUser'));
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
            if ($response) {
                $this->session->setFlashdata('response', ['status' => $response, 'message' => 'Acara berhasil diperbaharui.']);
            } else {
                $this->session->setFlashdata('response', ['status' => $response, 'message' => 'Acara gagal diperbaharui. ']);
            }
        }
        return redirect()->to(base_url('SangatRahasia/adminAcara'));
    }
    public function adminDeleteAcara($id)
    {
        $response = $this->adminAcaraModel->delete($id);
        // var_dump($response);
        if ($response->resultID) {
            $this->session->setFlashdata('response', ['status' => $response, 'message' => 'Acara berhasil dihapus.']);
        } else {
            $this->session->setFlashdata('response', ['status' => $response, 'message' => 'Acara gagal dihapus. ' . $response->connID->error]);
        }

        return redirect()->to(base_url('SangatRahasia/adminAcara'));
    }
    // ======= END OF ACARA =======
    public function adminArtikelTrending()
    {
        $data['dataTrending'] = $this->adminArtikelTrendingModel->findAll();
        $data['session'] = $this->session->getFlashdata('response');

        $test['judul'] = "Artikel Trending";
        $test['link'] = base_url('artikel/terkini');

        echo view('admin/admin_header_v');
        echo view('admin/admin_sidebar_v');
        echo view('admin/admin_topbar_v', $test);
        echo view('admin/artikel/admin_artikel_trending_v', $data);
        echo view('admin/admin_footer_v.php');
    }
    public function adminTambahArtikelTrending()
    {
        helper('form');
        $id = $this->request->getPost('id');

        $gambar = $this->request->getFile('gambar');
        // print_r($gambar->getName());
        // die;
        // $gambar->move(ROOTPATH . 'public/src/img/artikel/detail_artikel');
        if (!$gambar->getName() == null) {
            $gambar->move(ROOTPATH . 'public/src/img/artikel/detail_artikel');
            $gambarFix = $gambar->getName();
        } else {
            $gambarFix = 'default.svg';
        }
        // print_r($gambar->getName());
        // die;

        $data = [
            "judul" => $this->request->getPost('judul'),
            "organisasi" => $this->request->getPost('organisasi'),
            "nama" => $this->request->getPost('nama'),
            "berita" => $this->request->getPost('berita'),
            "berita2" => $this->request->getPost('berita2'),
            // "gambar" => $this->request->getPost('gambar'),
            "gambar" => $gambarFix,
            "tanggal" => date('Y-m-d')
        ];
        if (empty($id)) {
            $response = $this->adminArtikelTrendingModel->insert($data);
            if ($response) {
                $this->session->setFlashdata('response', ['status' => $response, 'message' => 'Artikel berhasil ditambahkan.']);
            } else {
                $this->session->setFlashdata('response', ['status' => $response, 'message' => 'Artikel gagal ditambahkan. ']);
            }
        } else {
            $response = $this->adminArtikelTrendingModel->update($id, $data);
            if ($response) {
                $this->session->setFlashdata('response', ['status' => $response, 'message' => 'Artikel berhasil diubah.']);
            } else {
                $this->session->setFlashdata('response', ['status' => $response, 'message' => 'Artikel gagal diubah. ']);
            }
        }
        return redirect()->to(base_url('SangatRahasia/adminArtikelTrending'));
    }
    public function adminDeleteTrending($id)
    {
        $response = $this->adminArtikelTrendingModel->delete($id);
        if ($response->resultID) {
            $this->session->setFlashdata('response', ['status' => $response, 'message' => 'Acara berhasil dihapus.']);
        } else {
            $this->session->setFlashdata('response', ['status' => $response, 'message' => 'Acar gagal dihapus. ' . $response->connID->error]);
        }
        return redirect()->to(base_url('SangatRahasia/adminArtikelTrending'));
    }
    // ====== END OF ARTIKEL TRENDING ========
    public function adminArtikelTerkini()
    {
        $data['session'] = $this->session->getFlashdata('response');
        $data['dataTerkini'] = $this->adminArtikelTerkiniModel->findAll();
        $test['judul'] = "Artikel Terkini";
        $test['link'] = base_url('artikel/terkini');

        echo view('admin/admin_header_v');
        echo view('admin/admin_sidebar_v');
        echo view('admin/admin_topbar_v', $test);
        echo view('admin/artikel/admin_artikel_terkini_v', $data);
        echo view('admin/admin_footer_v.php');
    }
    public function adminTambahArtikelTerkini()
    {
        helper('form');
        $id = $this->request->getPost('id');

        $gambar = $this->request->getFile('gambar');
        // print_r($gambar->getName());
        // die;
        // $gambar->move(ROOTPATH . 'public/src/img/artikel/detail_artikel');
        if (!$gambar->getName() == null) {
            $gambar->move(ROOTPATH . 'public/src/img/artikel/detail_artikel');
            $gambarFix = $gambar->getName();
        } else {
            $gambarFix = 'default.svg';
        }
        // print_r($gambar->getName());
        // die;

        $data = [
            "judul" => $this->request->getPost('judul'),
            "organisasi" => $this->request->getPost('organisasi'),
            "nama" => $this->request->getPost('nama'),
            "berita" => $this->request->getPost('berita'),
            "berita2" => $this->request->getPost('berita2'),
            // "gambar" => $this->request->getPost('gambar'),
            "gambar" => $gambarFix,
            "tanggal" => date('Y-m-d')
        ];
        if (empty($id)) {
            $response = $this->adminArtikelTerkiniModel->insert($data);

            if ($response) {
                $this->session->setFlashdata('response', ['status' => $response, 'message' => 'Artikel berhasil ditambahkan.']);
            } else {
                $this->session->setFlashdata('response', ['status' => $response, 'message' => 'Artikel gagal ditambahkan. ']);
            }
        } else {
            $response = $this->adminArtikelTerkiniModel->update($id, $data);
            if ($response) {
                $this->session->setFlashdata('response', ['status' => $response, 'message' => 'Artikel berhasil diubah.']);
            } else {
                $this->session->setFlashdata('response', ['status' => $response, 'message' => 'Artikel gagal diubah. ']);
            }
        }
        return redirect()->to(base_url('SangatRahasia/adminArtikelTerkini'));
    }
    public function adminDeleteTerkini($id)
    {
        $response = $this->adminArtikelTerkiniModel->delete($id);
        if ($response->resultID) {
            $this->session->setFlashdata('response', ['status' => $response, 'message' => 'Acara berhasil dihapus.']);
        } else {
            $this->session->setFlashdata('response', ['status' => $response, 'message' => 'Acar gagal dihapus. ' . $response->connID->error]);
        }
        return redirect()->to(base_url('SangatRahasia/adminArtikelTerkini'));
    }
    // ====== END OF ARTIKEL TERKINI ========
    public function adminArtikelLawas()
    {
        $data['dataLawas'] = $this->adminArtikelLawasModel->findAll();
        $data['session'] = $this->session->getFlashdata('response');
        $test['judul'] = "Artikel Lawas";
        $test['link'] = base_url('artikel/lawas');

        echo view('admin/admin_header_v');
        echo view('admin/admin_sidebar_v');
        echo view('admin/admin_topbar_v', $test);
        echo view('admin/artikel/admin_artikel_lawas_v', $data);
        echo view('admin/admin_footer_v.php');
    }
    public function adminTambahArtikelLawas()
    {
        helper('form');
        $id = $this->request->getPost('id');

        $gambar = $this->request->getFile('gambar');
        // print_r($gambar->getName());
        // die;
        // $gambar->move(ROOTPATH . 'public/src/img/artikel/detail_artikel');
        if (!$gambar->getName() == null) {
            $gambar->move(ROOTPATH . 'public/src/img/artikel/detail_artikel');
            $gambarFix = $gambar->getName();
        } else {
            $gambarFix = 'default.svg';
        }
        // print_r($gambar->getName());
        // die;

        $data = [
            "judul" => $this->request->getPost('judul'),
            "organisasi" => $this->request->getPost('organisasi'),
            "nama" => $this->request->getPost('nama'),
            "berita" => $this->request->getPost('berita'),
            "berita2" => $this->request->getPost('berita2'),
            // "gambar" => $this->request->getPost('gambar'),
            "gambar" => $gambarFix,
            "tanggal" => date('Y-m-d')
        ];
        if (empty($id)) {
            $response = $this->adminArtikelLawasModel->insert($data);
            if ($response) {
                $this->session->setFlashdata('response', ['status' => $response, 'message' => 'Artikel berhasil ditambahkan.']);
            } else {
                $this->session->setFlashdata('response', ['status' => $response, 'message' => 'Artikel gagal ditambahkan. ']);
            }
        } else {
            $response = $this->adminArtikelLawasModel->update($id, $data);
            if ($response) {
                $this->session->setFlashdata('response', ['status' => $response, 'message' => 'Artikel berhasil diubah.']);
            } else {
                $this->session->setFlashdata('response', ['status' => $response, 'message' => 'Artikel gagal diubah. ']);
            }
        }
        return redirect()->to(base_url('SangatRahasia/adminArtikelLawas'));
    }
    public function adminDeleteLawas($id)
    {
        $response = $this->adminArtikelLawasModel->delete($id);
        if ($response->resultID) {
            $this->session->setFlashdata('response', ['status' => $response, 'message' => 'Acara berhasil dihapus.']);
        } else {
            $this->session->setFlashdata('response', ['status' => $response, 'message' => 'Acar gagal dihapus. ' . $response->connID->error]);
        }
        return redirect()->to(base_url('SangatRahasia/adminArtikelLawas'));
    }
}
