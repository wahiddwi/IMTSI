<?php

namespace App\Controllers;

class Profil extends BaseController
{
    public function index()
    {
        echo view('guest/template_guest/header.php');
        echo view('guest/profil.php');
        echo view('guest/template_guest/footer.php');
    }
}
