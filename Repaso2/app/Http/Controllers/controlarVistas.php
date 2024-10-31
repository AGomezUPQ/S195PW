<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControlarVistas extends Controller
{
    public function home()
    {
        return view('inicio');
    }
    public function formulario()
    {
        return view('formulario');
    }

}