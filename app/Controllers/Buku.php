<?php

namespace App\Controllers;

class Buku extends BaseController
{
    public function view()
    {
        echo view('header');
        echo view('/pages/buku/buku');
        echo view('footer');
    }
}