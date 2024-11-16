<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/fondo.css') }}">
    @vite(['resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Consultar Clientes</title>
</head>
<body>
    <!-- Inicia navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('rutainicio') }}">Turista sin Maps</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('rutaformulario') }}"> {{ __('Registro Clientes') }} </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('rutaclientes') }}"> {{ __('Consulta Clientes') }}</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Finaliza navbar -->
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
</body>
</html>