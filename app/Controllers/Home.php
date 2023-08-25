<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('index.php');
    }
}

class dashboard extends BaseController
{
    public function index(): string
    {
        return view('inicio.view.php');
    }
}
