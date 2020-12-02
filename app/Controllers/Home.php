<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		echo view('header_v');
		echo view('artikel_v');
		echo view('footer_v');
	}

	//--------------------------------------------------------------------

}
