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

<script>
 @if (session('exito'))

 alertify.set('notifier', 'delay', 20); 
alertify.set('notifier', 'position', 'top-center');
alertify.success('{{ session('exito') }}');
  
 @endif

  
</script>



<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
      <div class="card-header">
        Registro de Libros
      </div>
        <div class="card-body">

          <form action="/enviar" method="POST" >
          @csrf()
            <div class="form-row">
            <div class="form-group">
                <label class="form-label">ISBN</label>
                <input type="text" class="form-control" name="txtISBN" required pattern="\d{13}" placeholder="1234567891234">
                <small class="text-danger fst-italic"> {{ $errors->first('txtISBN') }}</small>
              </div>
              <div class="form-group">
                <label class="form-label">Titulo</label>
                <input type="text" class="form-control" name="txtTitulo" placeholder="Titulo">
                <small class="text-danger fst-italic">{{ $errors->first('txtTitulo') }}</small>
                </div>
                </div>  
            

            <div class="form-group">
              <label class="form-label" for="inputAddress">Autor</label>
              <input type="text" class="form-control" name="txtAutor" placeholder="Autor...">
            </div>
            <div class="form-group">
              <label class="form-label" for="inputAddress2">Páginas</label>
              <input type="number" class="form-control" name="txtPaginas" placeholder="Páginas">
            </div>
            <div class="form-group">
              <label class="form-label" for="inputAddress2">Año</label>
              <input type="number" class="form-control" name="txtYear" placeholder="Año">
            </div>
            <div class="form-group">
              <label class="form-label" for="inputAddress2">Editorial</label>
              <input type="text" class="form-control" name="txtEditorial" placeholder="Editorial">
            </div>
            <div class="form-group">
              <label class="form-label" for="inputAddress2">Email Editorial</label>
              <input type="email" class="form-control" name="txtEmail" placeholder="Email Editorial">
            </div>
            <button type="submit" class="btn btn-primary">Registro de libros</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>






@endsection