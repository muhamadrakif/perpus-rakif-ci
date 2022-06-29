<?php

namespace App\Controllers;

class Anggota extends BaseController
{
    public function view()
    {
        echo view('header');
        echo view('/pages/anggota/anggota');
        echo view('footer');
    }
}