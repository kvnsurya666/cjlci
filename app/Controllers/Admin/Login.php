<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Login extends BaseController
{
    public function index()
    {
		$data = [
			'title' => 'Login Cipta Jaya Lestari'
		];

       return view('login/home', $data);
    }
}
