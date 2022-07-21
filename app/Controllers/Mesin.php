<?php

namespace App\Controllers;

class Mesin extends BaseController
{
    public function index()
    {
		$data = [
			'title' => 'CIPTA JAYA LESTARI'
		];

       return view('mesin/home', $data);
    }
}
