<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
		$data = [
			'title' => 'Home | Cipta Jaya Lestari'
		];

       echo view('pages/home', $data);
    }

    public function katalog()
    {
		$data = [
			'title' => 'Katalog Produk'
		];

       echo view('pages/katalog', $data);
    }
}