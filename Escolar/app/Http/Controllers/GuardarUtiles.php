<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuardarUtiles extends Controller
{
    public function formUtiles(){
    return view('escolar');
}


public function SalvarUtiles(Request $peticion){

    
    
    
    $peticion->validate([
        'txtNombre' => 'required',
        'txtMarca' => 'required',
        'txtCantidad' => 'required|numeric|min:1'
    ]);



    
    $nombre = $peticion->input('txtNombre'); 
    $marca = $peticion->input('txtMarca'); 

    session()->Flash('exito', 'Se guardaron los datos' .$nombre . '______' .$marca);

    return to_route('escolar');



}
}
