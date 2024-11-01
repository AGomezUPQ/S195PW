<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadcionLibros;

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
    //public function procesarCliente(Request $peticion)

    public function procesarCliente(validadcionLibros $peticion)

    {

        $isbn = $peticion->input('txtISBN');
        $titulo = $peticion->input('txtTitulo');
        $autor = $peticion->input('txtAutor');
        $paginas = $peticion->input('txtPaginas');
        $year = $peticion->input('txtYear');
        $editorial = $peticion->input('txtEditorial');
        $email = $peticion->input('txtEmail');    

    
    session()->flash('exito', 'Se guardaron los datos: Título: ' . $titulo . 
    ', ISBN: ' . $isbn . 
    ', Autor: ' . $autor . 
    ', Páginas: ' . $paginas . 
    ', Year: ' . $year . 
    ', Editorial: ' . $editorial . 
    ', Email: ' . $email);

     
    
    return to_route('rutaformulario');
    

    
    }

}