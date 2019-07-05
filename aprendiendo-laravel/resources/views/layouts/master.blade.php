<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
</head>
<body>
    @section('header')
        <h1> Cabecera de la web (master)</h1>
    @show
    <hr>
    
    <div class="container">
        @yield('content')
    </div>

    <hr>
    @section('footer')
        Pie de la web (master)
    @show
</body>
</html>