@extends('layouts.plantillas')
    @section('titulo', 'componentes Blade')
    @section('contenido')
    <x-Card encabezado="Hola S195" titulo="Titulo1" textoBoton="Guardar">  </x-Card>
    <x-Card encabezado="Esto es una prueba" titulo="Titulo2" textoBoton="Cargar">  </x-Card>


    <x-Alert tipo="success"> Alerta verde </x-Alert>
    <x-Alert tipo="danger"> Alerta rojo </x-Alert>

@endsection

