<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consulta= cliente::all();
        return view('clientes',compact('consulta'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formulario');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $addCliente = new cliente();
        $addCliente->nombre = $request->input('txtnombre');
        $addCliente->apellido =  $request->input('txtapellido');
        $addCliente->correo = $request->input('txtcorreo');
        $addCliente->telefono = $request->input('txttelefono');
        $addCliente->save();

        $msj = $request->input('txtnombre');
        session()->flash('exito','Se guardo el cliente '.$msj);
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     */
    public function show(cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, cliente $cliente)
    {
        $cliente = cliente::findOrFail($cliente->id);
        
        $cliente -> update([
            'nombre' => $request->input('nombre'),
            'apellido' => $request->input('apellido'),
            'correo' => $request->input('correo'),
            'telefono' => $request->input('telefono')
        ]);
        $msj = $request->input('nombre');
        session()->flash('actualizado','Se Actualizo el cliente '.$msj);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(cliente $cliente)
    {
        $cliente = cliente::findOrFail($cliente->id);
        $cliente->delete();
        session()->flash('bien','Se Elimino el cliente ');
        return redirect()->back();
    }
}