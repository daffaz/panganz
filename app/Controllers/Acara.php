<?php

namespace App\Controllers;

class Acara extends BaseController
{
    public function index()
    {
        echo view('header_v');
        echo view('acara/acara_v');
        echo view('footer_v');
    }
    public function acara1()
    {
        echo view('header_v');
        echo view('acara/acara_detail_v');
        echo view('footer_v');
    }

    //--------------------------------------------------------------------

}
