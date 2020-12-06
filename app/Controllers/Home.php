<?php

namespace App\Controllers;

use App\Models\AcaraModel;

class Home extends BaseController
{
	public function __construct()
	{
		$this->acaraModel = new AcaraModel();
	}
	public function index()
	{
		$data['dataAcara'] = $this->acaraModel->findAll();

		echo view('header_v');
		echo view('beranda_v', $data);
		echo view('footer_v');
	}

	//--------------------------------------------------------------------

}
