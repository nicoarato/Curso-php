@include('includes.header')


<!-- Imprimir por pantalla -->
<h1>{{$titulo}}</h1>
<h2>{{$listado[2]}}</h2>
<p>{{ date('Y') }}</p>


<!-- Comentarios -->
<!-- Esto es un comentario html -->

<?php
//comentario php
?>

{{-- Comentario en blade --}}


<!-- mostrar si existe -->
<?= isset($director) ? $director : 'No existe director';?> <br>

 {{"No existe director sefsdfsfsf" }} 
<!--Condicionales -->
@if($titulo && count($listado) > 3)
    <h1>El titulo es : {{$titulo}}</h1>
@elseif($titulo)
    <h1>El titulo SI existe</h1>
@else
    <h1>El titulo no existe</h1>
@endif

<!-- bucles -->
{{'En el for'}}
@for($i=0; $i < 10; $i++)
    <br>
    El numero es: {{$i}}
    
@endfor
<hr>

<?php $contador = 1 ?>
{{'En el while'}}
@while($contador < 10)
    <br>
    El numero es: {{$contador}}
    
    <?php $contador++ ?>
@endwhile

<hr>

@foreach($listado as $pelicula)
    <p>{{$pelicula}}</p>
@endforeach

@include('includes.footer')