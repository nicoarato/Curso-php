<h1>{{$titulo}}</h1>
<p>(accion index del controlador PeliculaController)</p>


@if(isset($pagina))
    <h2>La pagina es: {{$pagina}}</h2>
@endif

<a href="{{ action('PeliculaController@detalle') }}">Ir al detalle con action</a>
<br>
<a href="{{ route('detalle.pelicula') }}">Ir al detalle con route</a>