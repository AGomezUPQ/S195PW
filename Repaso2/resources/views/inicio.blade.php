@extends('layouts.plantilla')
    @section('titulo', 'inicio')
    @section('contenido')
<head>
    <style>
        .contenido {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        /* Agrega aquí otros estilos si los tienes */
    </style>
</head>

    
<div class="contenido">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card mb-3">
      

      <img src="{{ asset('./storage/imagenes/calaverita.jpg') }}" alt="Calaverita">
        <div class="card-body">
          <h5 class="card-title">Noticia Literaria</h5>
          <p class="card-text">
          Las calaveritas literarias es una tradición muy importante en México, puesto que es una serie de versos rítmicos en el que vemos a la muerte con sátira, desde hace años se ha realizado en la celebración de Día de Muertos. 

          Se menciona que dicha práctica se realizaba desde el siglo XV, quienes tenían su origen en los epitafios de Jorge Manrique, un poeta prerrenacentista, pero fue un trabajo literario que durante muchos años estuvo censurado por la colonia española, por lo que se mantuvo escondido entre las tinieblas. 

          La Casa Universitaria del Libro de la UNAM, destaca que las primeras calaveras en publicarse fueron hasta mediados del siglo XIX, siendo las primeras en difundirse en medios impresos tras la prohibición de los españoles. 

          De todos modos, se destaca que la publicación más antigua y conservada fue la de José Indelicato en Guadalajara durante 1849, publicada en el periódico "El Socialista", acompañados de ilustraciones relacionadas con la muerte, considerándose una de las primeras en conocerse. 
          </p>
          <p class="card-text"><small class="text-body-secondary">Ulima actualización hace 3 minutos</small></p>
        </div>
      </div>
    </div>
  </div>
</div>




@endsection