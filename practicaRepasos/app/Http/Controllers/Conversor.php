<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Conversor extends Controller
{
    public function welcome()
    {
        return view('inicio');
    }
    public function repaso1(Request $request)
    {
        $resultado = '';
        if($request->isMethod('post')){
            $input = $request->input('valor');
            $Conversion = $request->input('conversion');

            if($Conversion == 'megabyte_a_gigabyte'){
                $resultado = $input . 'megabyte = ' . ($input / 1024) . 'gigabyte';
            }elseif($Conversion == 'gigabyte_a_megabyte'){
                $resultado = $input . 'gigabyte = ' . ($input * 1024) . 'megabyte';
            }elseif($Conversion == 'gigabyte_a_terabyte'){
                $resultado = $input . 'gigabyte = ' . ($input / 1024) . 'terabyte';
            }elseif($Conversion == 'terabyte_a_gigabyte'){
                $resultado = $input . 'terabyte = ' . ($input * 1024 ) . 'gibabyte';
            }else{
                $resultado = 'Pide conversion valida';
            }
        }
        return view('repaso1', compact('resultado'));
    }
}
