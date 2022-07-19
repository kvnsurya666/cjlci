<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
		$data = [
			'title' => 'CIPTA JAYA LESTARI'
		];

       return view('pages/home', $data);
    }

    public function katalog()
    {
		$data = [
			'title' => 'Katalog Produk'
		];

       return view('pages/katalog', $data);
    }

    public function tentangkami()
    {
		$data = [
			'title' => 'Tentang Kami'
		];

       return view('pages/tentangkami', $data);
    }
}