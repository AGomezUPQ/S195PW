
@extends('layouts.plantilla1')
@section('titulo','Formulario Clientes')
@section('contenido')

<div class="container mt-5 col-md-6">
    <div class="card text-center">


        @session ('exito')
        <script>
            Swal.fire({
                title: "Respuesta del servidor",
                text: "Se guardó el usuario: {{$value}}",
                icon: "success"
            });
        </script>
        @endsession

        <div class="card-header">
            
            {{ __('Registro de clientes') }}
        </div>

        <div class="card-body text-justify">
            <form action="{{ route('cliente.store')}} " method="POST">
                <!-- este es para que genere el token     -->
                @csrf

                <div class="mb-3">
                    <label for="nombre" class="form-label">{{ __('Nombre:') }}</label>
                    <input type="text" class="form-control" name="txtnombre" id="txtnombre" value="{{old('txtnombre')}}">
                    <small>{{$errors->first('txtnombre')}}</small>
                </div>
                <div class="mb-3">
                    <label for="apellido" class="form-label">{{ __('Apellido:') }}</label>
                    <input type="text" class="form-control" name="txtapellido" id="txtapellido" value="{{old('txtapellido')}}">
                    <small>{{$errors->first('txtapellido')}}</small>
                </div>
                <div class="mb-3">
                    <label for="correo" class="form-label">{{ __('Correo:') }}</label>
                    <input type="email" class="form-control" name="txtcorreo" id="txtcorreo" value="{{old('txtcorreo')}}">
                    <small>{{$errors->first('txtcorreo')}}</small>
                </div>
                <div class="mb-3">
                    <label for="numero" class="form-label">{{ __('Telefono:') }}</label>
                    <input type="number" class="form-control" name="txttelefono" id="txttelefono" value="{{old('txttelefono')}}">
                    <small>{{$errors->first('txttelefono')}}</small>
                </div>
        </div>

        <div class="card-footer text-body-secondary">
            <button class="btn btn-success" type="submit">{{ __('Guardar Cliente') }}</button>
            </form>
        </div>

    </div>
</div>
@endsection