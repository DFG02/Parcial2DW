<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('Formularios Login/indexlogin.php');
    }
    public function compras()
    {
        return view('Logeo.php');
    }


}
