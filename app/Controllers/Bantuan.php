<?php

namespace App\Controllers;

class Bantuan extends BaseController
{
    public function index()
    {
        echo view('header_v');
        echo view('bantuan/bantuan_v');
        echo view('footer_v');
    }
}
