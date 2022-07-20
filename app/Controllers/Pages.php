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

    public function tentangkami()
    {
		$data = [
			'title' => 'Tentang Kami'
		];

       return view('pages/tentangkami', $data);
    }

    public function mesin()
    {
		$data = [
			'title' => 'Katalog Mesin'
		];

       return view('pages/mesin', $data);
    }

    public function oli()
    {
		$data = [
			'title' => 'Katalog Oli'
		];

       return view('pages/oli', $data);
    }

    public function aksesoris()
    {
		$data = [
			'title' => 'Katalog Aksesoris'
		];

       return view('pages/aksesoris', $data);
    }

    public function jasa()
    {
		$data = [
			'title' => 'Katalog Jasa'
		];

       return view('pages/jasa', $data);
    }
}