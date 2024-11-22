@extends('layouts.plantillas')
    @section('titulo', 'update')
    @section('contenido')
    
<!-- Inicia Tarjeta con formulario -->
<div class="container mt-5 col-md-6">



 @if (session('exito'))
    <x-Alert tipo="success"> {{ session('exito') }} </x-Alert>
 @endif
 <!-- Segunda metodo para devolver una respuesta -->
  @session('exito')
    <x-Alert tipo="danger"> {{ session('value') }} </x-Alert>
  @endSession

  @session('exito')
  <script>
    Swal.fire({
    title: "Respuesta del servidor",
    text: '{{ $value }}',
    icon: "success"
  });
  </script>
  @endSession
        <div class="card font-monospace">
            <div class="card-header fs-5 text-center text-primary">
                {{ __('Registro clientes') }}
            </div>
            <div class="card-body text-justify">
                <!-- <form action="/enviar" method="POST" > -->
                <form action="{{ route('procesar') }}" method="POST" >    
                @csrf()
                    <div class="mb-3">
                        <label for="nombre" class="form-label">{{ __('Nombre:') }}</label>
                        <!-- <input type="text" class="form-control" name="txtnombre"> -->
                        <input type="text" class="form-control" name="txtnombre" >
                        <small class="text-danger fst-italic"> {{ $errors->first('txtnombre') }}</small>
                    </div>
                    <div class="mb-3">
                        <label for="apellido" class="form-label">{{ __('Apellido:') }}</label>
                        <input type="text" class="form-control" name="txtapellido">
                        <small class="text-danger fst-italic"> {{ $errors->first('txtapellido') }}</small>
                        <!-- La validacion del Required no siempre son muy efectivas, Required es solo una y no muy confiable -->
                        <!-- <input type="text" required class="form-control" name="txtapellido"> -->
                    </div>
                    <div class="mb-3">
                        <label for="correo" class="form-label">{{ __('Correo:') }}</label>
                        <input type="text" class="form-control" name="txtcorreo">
                        <small class="text-danger fst-italic"> {{ $errors->first('txtcorreo') }}</small>
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">{{ __('Teléfono:') }} </label>
                        <input type="text" class="form-control" name="txttelefono">
                        <small class="text-danger fst-italic"> {{ $errors->first('txttelefono') }}</small>
                    </div>
                    <div class="card-footer text-muted">
                        <div class="d-grid gap-2 mt-2 mb-1">
                            <button type="submit" class="btn btn-success btn-sm">{{ __('Guardar Cliente') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <!-- Finaliza Tarjeta con formulario -->




@endsection

