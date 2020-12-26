<?php

namespace App\Controllers;

use App\Models\AcaraModel;
use App\Models\ArtikelLawasModel;
use App\Models\ArtikelTrendingModel;
use App\Models\ArtikelTerkiniModel;

class Home extends BaseController
{
	public function __construct()
	{
		$this->acaraModel = new AcaraModel();
		$this->lawasModel = new ArtikelLawasModel();
		$this->trendingModel = new ArtikelTrendingModel();
		$this->terkiniModel = new ArtikelTerkiniModel();
	}
	public function index()
	{
		$data['dataAcara'] = $this->acaraModel->findAll();

		// d($this->request->getVar('cari'));
		echo view('header_v');
		echo view('beranda_v', $data);
		echo view('footer_v');
	}
	public function search()
	{
		$cari = $this->request->getGet('cari');
		// $db = \Config\Database::connect();

		// $query = $db->query("SELECT * FROM tbl_acara WHERE acara LIKE '%" . $q . "%' ");
		$find = $this->acaraModel->like('acara', '%' . $cari . '%');
		$find = $this->acaraModel->orLike('judul', '%' . $cari . '%')->findAll();
		// ARTIKEL TRENDING SECTION
		$findArtikelTrending = $this->trendingModel->like('judul', '%' . $cari . '%')->findAll();
		// TERKINI
		$findArtikelTerkini = $this->terkiniModel->like('judul', '%' . $cari . '%')->findAll();
		// LAWAS
		$findArtikelLawas = $this->lawasModel->like('judul', '%' . $cari . '%')->findAll();
		// $find = $this->acaraModel->like('acara', '%' . $cari . '%')->findAll();
		// $data = [
		// 	'cari' => $cari,
		// 	'dataAcara' => $find,
		// 	'dataArtikel' => [
		// 		'dataArtikelTrending' => $findArtikelTrending,
		// 		'dataArtikelTerkini' => $findArtikelTerkini,
		// 		'dataArtikelLawas' => $findArtikelLawas
		// 	]
		// // ];
		// print_r($data['dataArtikel']['dataArtikelTrending']);
		// die;
		$data['cari'] = $cari;
		$data['dataAcara'] = $find;
		$data['dataArtikelTrending'] = $findArtikelTrending;
		$data['dataArtikelTerkini'] = $findArtikelTerkini;
		$data['dataArtikelLawas'] = $findArtikelLawas;

		// print_r($find);
		// die;
		echo view('header_v');
		echo view('pencarian_v', $data);
		echo view('footer_v');
	}

	//--------------------------------------------------------------------

}
