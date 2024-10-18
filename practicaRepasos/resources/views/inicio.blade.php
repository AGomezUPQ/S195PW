<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
    <title>Programación Web</title>
    
</head>
<body>
    <div class="container-fluid bg-danger py-3">
        <h1 class="text-center text-white">Programación Web</h1>
    </div>
    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm text-center">
                    <div class="card-body">
                        <h5 class="card-title">Datos de contacto</h5>
                        <p class="card-text">Gomez Utrera Jose Alberto</p>
                        <p class="card-text">Grupo: S195</p>
                        <p class="card-text"></p>
                        <a href="{{ route('rutaRepaso1') }}" class="btn btn-primary">Ir al Repaso 1</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <!--  <div class="container-fluid bg-primary py-3 text-center text-white">
        <p class="mb-0">UNIVERSIDAD POLITÉCNICA DE QUERÉTARO</p>
    </div> -->
<p>
    <footer class="container-fluid bg-primary py-3 text-center text-white">
        <p class="mb-0">UNIVERSIDAD POLITÉCNICA DE QUERÉTARO</p>
    </footer>
</body>

</html> 

