<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])

 <style>
.container {
    
  display: flex; 
  flex-direction: column; 
  height: 100vh; 
}

main {
  flex: 1; /* Allow main content to grow and fill remaining space */
}

footer {
  /* No additional styles needed for footer positioning */
}

</style>

    <title>>@yield('titulo')</title>
</head>
<body>

<nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand"   href="{{ route('rutainicio') }}">Bibliotecas El Alquimista</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">Noticia Literaria</a>
        <a class="nav-link" href="{{ route('rutaformulario') }}">Registro de libro</a>
      </div>
    </div>
  </div>
</nav>
<!-- Finaliza el navbar -->

@yield('contenido')









<div class="container">
  <main> </main>
  <footer class="bg-body-tertiary text-center text-lg-start" data-bs-theme="dark">
    <div class="text-center p-3" style="background-color:rgba(255, 99, 71, 0.6);">
      © 30 de Octubre del 2024 Copyright:
      <a class="text-body" href="#">Bibliotecas el Alquimista</a>
    </div>
    </footer>
</div>
</body>
</html>