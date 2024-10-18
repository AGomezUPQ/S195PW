<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
    <title>Conversor de archivos</title>
</head>
<body>

<div class="container-fluid bg-danger py-3">
        <h1 class="text-center text-white">Programación Web</h1>
    </div>


    <div class="card text-center">
  
    <div class="card-title">
    <h5 class="card-title" >Repaso 1 </h5>
  </div>
  
  <div class="card-body">
    <h5 class="card-title">Conversor de unidades</h5>

    <form action="{{ route('rutaRepaso1') }}" method="POST">
        @csrf
        <label for="valor">Ingrese el valor:</label>
        <input type="number" name="valor" id="valor" required>
        
        <label for="conversion">Seleccione la conversión:</label>
        <select name="conversion" id="conversion">
            <option value="megabyte_a_gigabyte">MB a GB</option>
            <option value="gigabyte_a_megabyte">GB a MB</option>
            <option value="gigabyte_a_terabyte">GB a TB</option>
            <option value="terabyte_a_gigabyte">TB a GB</option>
        </select>
        <button type="submit" class="btn btn-primary btn-start">Convertir</button>
    </form>

    @if (isset($resultado))
        <h2>Resultado: {{ $resultado }}</h2>
    @endif

    
  </div>

</div>


<p>
    <footer class="container-fluid bg-primary py-3 text-center text-white">
        <p class="mb-0">UNIVERSIDAD POLITÉCNICA DE QUERÉTARO</p>
    </footer>
    
</body>
</html>