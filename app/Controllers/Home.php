<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		echo view('guest/template_guest/header.php');
		echo view('guest/home.php');
		echo view('guest/template_guest/footer.php');
	}
}
