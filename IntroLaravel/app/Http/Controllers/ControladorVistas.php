<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorCliente;


//class ControladorVistas extends Controller
//{
    /* 
    //Redireccion raiz
    return redirect('/');
    //redireccion con nombre de ruta
    return redirect()->route('rutaclientes');
    //redirecciones al origen de la peticion
    return back();
 */
    //
    /* 
    $id = [['usuario'=>1],['usuario'=>2]]
    return view('formulario',compact({'id'})); */

//}

//public function procesarCliente(validadorCliente $peticion)






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
    public function procesarCliente(validadorCliente $peticion)
    //public function procesarCliente(Request $peticion)
    {
    //Con esta funcion trabajabamos con el Request
    //public fuction procesarCliente(Request $peticion)

    //Esta es una forma de validar, cuando crece el codido es conveniente trabajarlo con validadores
    /* $validacion = $peticion->validate([
        'txtnombre'=>'require|min:3|max:20',
        'txtapellido'=>'require',
        'txtcorreo'=>'require|email:rfc,dns',
        'txttelefono'=>'require|numeric',
    ]); */

    //redireccion con mensaje de sesion
    $usuario = $peticion->input('txtNombre');
    session()->Flash('exito','Se guardo eL usuario: '.$usuario);

    return to_route('rutaformulario');

    }

 /*     public function procesarCliente()
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

    } */

}


