<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
    <title>Formulario</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Turista sin Mapa</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Registro de clientes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Algo de clientes</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<div class="card text-center">
  <div class="card-header">
    Registro de los clientes.
  </div>
  <div class="card-body">
    <form action="">
        <label for="Correo" class="form-label">Correo</label>
        <input type="mail" >
    </form>
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="{{ route('inicio}}" class="btn btn-primary">Go somewhere</a>
  </div>
</div>


    
</body>
</html>