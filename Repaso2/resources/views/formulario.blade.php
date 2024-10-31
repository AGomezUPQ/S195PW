@extends('layouts.plantilla')
    @section('titulo', 'formulario')
    @section('contenido')
<head>
    <style>
  .card-body {
    text-align: center;
    font-size: 18px;
  }

  .card-header {
    text-align: center;
    font-size: 24px;
  }
</style>
</head>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
      <div class="card-header">
        Registro de Libros
      </div>
        <div class="card-body">
          <form>
            <div class="form-row">
            <div class="form-group">
                <label class="form-label" for="inputEmail4">ISBN</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="ISBN">
              </div>
              <div class="form-group">
                <label class="form-label" for="inputPassword4">Titulo</label>
                <input type="text" class="form-control" id="inputPassword4" placeholder="Titulo">
              </div>
            </div>
            <div class="form-group">
              <label class="form-label" for="inputAddress">Autor</label>
              <input type="text" class="form-control" id="inputAddress" placeholder="Autor...">
            </div>
            <div class="form-group">
              <label class="form-label" for="inputAddress2">Páginas</label>
              <input type="text" class="form-control" id="inputAddress2" placeholder="Páginas">
            </div>
            <div class="form-group">
              <label class="form-label" for="inputAddress2">Editorial</label>
              <input type="text" class="form-control" id="inputAddress2" placeholder="Editorial">
            </div>
            <div class="form-group">
              <label class="form-label" for="inputAddress2">Email Editorial</label>
              <input type="text" class="form-control" id="inputAddress2" placeholder="Email Editorial">
            </div>
            <button type="submit" class="btn btn-primary">Registro de libros</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection