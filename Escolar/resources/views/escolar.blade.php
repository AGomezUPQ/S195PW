<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utiles Escolar</title>
</head>
<body>
 


<div> 
    Utiles Escolares
</div>

@if (session('exito'))
<h5> {{ session('exito') }} </h5>
@endif    

<card>
    <form action="/enviar" method="POST">
    @csrf()    
        <div>
            <label> Nombre: </label>
            <input type="text" name="txtNombre" id="txtNombre" placeholder="Ingresa el nombre"> </input>
            <small class="text-danger fst-italic"> {{ $errors->first('txtNombre') }}</small>
        </div>            
        <div>
            <label> Marca: </label>
            <input input type="text" name="txtMarca" id="txtMarca" placeholder="Ingresa la marca"> </input>
            <small class="text-danger fst-italic"> {{ $errors->first('txtMarca') }}</small>
        </div>    
        <div>
            <label> Cantidad: </label>
            <input input type="number" name="txtCantidad" id="txtCantidad" placeholder="Ingresa la cantidad"> </input>
            <small class="text-danger fst-italic"> {{ $errors->first('txtMarca') }}</small>
        </div>        
        
        <button type="submit" class="btn btn-primary">Registro de Uiles</button>


        
    </form>    
</card>
    
</body>
</html>
