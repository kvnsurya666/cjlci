<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
		$data = [
			'title' => 'Cipta Jaya Lestari'
		];

       return view('home/index', $data);
    }
}
