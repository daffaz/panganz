<?php

namespace App\Controllers;

class Kontak extends BaseController
{
    public function index()
    {
        echo view('header_v');
        echo view('kontak_v');
        echo view('footer_v');
    }
}
