<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		echo view('header_v');
		echo view('beranda_v');
		echo view('footer_v');
	}

	//--------------------------------------------------------------------

}
