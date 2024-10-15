<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorVistas extends Controller
{
    public function home()
    {
        return view('inicio');
    }
    public function formulario()
    {
        return view('formulario');
    }
    public function componentes()
    {
        return view('componentes');
    }
    public function consulta()
    {
        return view('clientes');
    }
    public function procesarCliente()
    //public function procesarCliente(Request $peticion)
    {
        return 'Llego tu formulario al controlador';

        //Imprimimos todo lo que viene en la peticion
        //return $peticion->all();

        //Imprime la ruta completa de la peticion
        //return $peticion->path();

        //imprime la url completa de la peticion
        //return $peticion->url();

        //imprime la ip de la peticion
        //return $peticion->ip();

    }

}


