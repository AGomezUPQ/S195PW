<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/fondo.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @vite(['resources/js/app.js'])
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
                        <a class="nav-link" aria-current="page" href="{{ route('rutaformulario') }}">Registro Clientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Consulta Clientes</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Finaliza navbar -->

    {{--Inicia tarjetaCliente--}}

    

    <div class="container mt-5 col-md-8">
    @foreach ($consultaClientes as $clientes)
    <div class="card text-justify font-monospace mt-3">

        <div class="card-header fs-5 text-primary">
            {{$clientes->nombre}}
        </div>

        <div class="card-body">
            <h5 class="fw-bold">{{$clientes->correo}}</h5>
            <h5 class="fw-medium">{{$clientes->telefono}}</h5>
            <p class="card-text fw-lighter"></p>
        </div>
        <div class="card-footer text-muted">

            <button type="button" class="btn btn-warning btn-sm " data-bs-toggle="modal" data-bs-target="#modalUpdate{{ $clientes->id }}">
                Actualizar
            </button>
            <!-- Modal de update -->
            <div class="modal fade" id="modalUpdate{{ $clientes->id }}" tabindex="-1" aria-labelledby="actualizarClienteLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">

                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="card-header">

                                <h3>Actualizar cliente</h3>
                            </div>
                            <div class="card-body text-justify">
                                <form action="{{ route('rutamodificar', $clientes->id)}}" method="POST">

                                    @csrf
                                    @method('PUT')
                                    <div class="mb-3">
                                        <label for="nombre" class="form-label">{{ __('Nombre:') }}</label>
                                        <input type="text" class="form-control" name="txtnombre" id="txtnombre" value="{{ old('txtnombre', $clientes->nombre) }}">
                                        <small>{{$errors->first('txtnombre')}}</small>
                                    </div>
                                    <div class="mb-3">
                                        <label for="apellido" class="form-label">{{ __('Apellido:') }}</label>
                                        <input type="text" class="form-control" name="txtapellido" id="txtapellido" value="{{ old('txtapellido', $clientes->apellido) }}">
                                        <small>{{$errors->first('txtapellido')}}</small>
                                    </div>
                                    <div class="mb-3">
                                        <label for="correo" class="form-label">{{ __('Correo:') }}</label>
                                        <input type="email" class="form-control" name="txtcorreo" id="txtcorreo" value="{{ old('txtcorreo', $clientes->correo) }}">
                                        <small>{{$errors->first('txtcorreo')}}</small>
                                    </div>
                                    <div class="mb-3">
                                        <label for="numero" class="form-label">{{ __('Telefono:') }}</label>
                                        <input type="number" class="form-control" name="txttelefono" id="txttelefono" value="{{ old('txttelefono', $clientes->telefono) }}">
                                        <small>{{$errors->first('txttelefono')}}</small>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger btn-sm " data-bs-dismiss="modal">Cerrar</button>
                                        <button type="submit" class="btn btn-warning btn-sm">Actualizar</button>
                                    </div>
                                    @session ('Actualizar')
                                    <script>
                                        Swal.fire({
                                            title: "Respuesta del servidor",
                                            text: "Cliente actualizado correctamente",
                                            icon: "success"
                                        });
                                    </script>
                                    @endsession
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <button type="button" class="btn btn-danger btn-sm " data-bs-toggle="modal" data-bs-target="#modalEliminar{{ $clientes->id }}">
                Eliminar
            </button>

            <!-- Modal de Delete -->
            <div class="modal fade" id="modalEliminar{{ $clientes->id }}" tabindex="-1" aria-labelledby="eliminarCliente" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalEliminar{{ $clientes->id }}">Confirmación</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body text-center">
                            <svg width="50" height="50" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                <path d="M464 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zm-83.6 290.5c4.8 4.8 4.8 12.6 0 17.4l-40.5 40.5c-4.8 4.8-12.6 4.8-17.4 0L256 313.3l-66.5 67.1c-4.8 4.8-12.6 4.8-17.4 0l-40.5-40.5c-4.8-4.8-4.8-12.6 0-17.4l67.1-66.5-67.1-66.5c-4.8-4.8-4.8-12.6 0-17.4l40.5-40.5c4.8-4.8 12.6-4.8 17.4 0l66.5 67.1 66.5-67.1c4.8-4.8 12.6-4.8 17.4 0l40.5 40.5c4.8 4.8 4.8 12.6 0 17.4L313.3 256l67.1 66.5z"/>
                            </svg>
                            <p>¿Estas seguro que quieres eliminar este registro?</p>
                        </div>
                        <div class="modal-footer justify-content-center">
                            <form action="{{ route('rutaeliminar', $clientes->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Sí, confirmar</button>
                                @session ('Eliminar')
                                    <script>
                                        Swal.fire({
                                            title: "Eliminado !!",
                                            text: "Usuario eliminado correctamente", 
                                            icon: "success"
                                        });
                                    </script>
                                    @endsession
                            </form>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    @endforeach
</div>



    
</body>
</html>




    
   
    

