<?php

namespace App\Controllers;

class Transaksi extends BaseController
{
    public function view()
    {
        echo view('header');
        echo view('/pages/transaksi/transaksi');
        echo view('footer');
    }
}