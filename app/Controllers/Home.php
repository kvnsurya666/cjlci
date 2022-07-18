<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $url = base_url();
		$img = base_url('assets/img/logo ciptajayalestari.PNG');
		$data['logo'] = '<div class="logo">
							<h1>
								<a href=' . $url . '>
									<img class="navbar-brand-beranda" src=' . $img . '>
								</a>
							</h1>
						</div>';
		$this->layout('home', 'home', $data);
    }
}
