<?php

namespace App\Controllers;

class Artikel extends BaseController
{
    public function index()
    {
        echo view('header_v');
        echo view('artikel/artikel_v');
        echo view('footer_v');
    }
    public function trending()
    {
        echo view('header_v');
        echo view('artikel/artikel_trending_v');
        echo view('footer_v');
    }
    public function terkini()
    {
        echo view('header_v');
        echo view('artikel/artikel_terkini_v');
        echo view('footer_v');
    }
    public function lawas()
    {
        echo view('header_v');
        echo view('artikel/artikel_lawas_v');
        echo view('footer_v');
    }
    public function artikel1()
    {
        echo view('header_v');
        echo view('artikel/artikel_detail_lawas1_v');
        echo view('footer_v');
    }

    //--------------------------------------------------------------------

}
