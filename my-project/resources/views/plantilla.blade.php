<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
 
</head>
<body>
    <header>
        <div id="header-inicio">
        <a id="header-logo" href=" {{ route('inicio') }} ">
            <img class="logo-imagen" src="{{ asset('assets/img/icono/chollo.png') }}" alt="chollo" />
            <span class="logo-nombre1">ChollosGiorgi.com</span>
            <span class="logo-nombre2">░▒▓ Severo</span>
        </a>
    </div>
        <nav id="menu">
            <ul>
                <a href="{{ route('inicio') }}"><img src="{{ asset('assets/img/icono/inicio.png') }}" alt="casa" />Inicio</a>
                <a href="{{ route('chollos') }}"><img src="{{ asset('assets/img/icono/chollo.png') }}"alt="nuevo" />Chollos</a>
                <a href="{{ route('chollos') }}"><img src="{{ asset('assets/img/icono/reciente.png') }}"alt="nuevo" />Nuevo</a>
                <a href="{{ route('chollos') }}"><img src="{{ asset('assets/img/icono/popular.png') }}"alt="casa" />Popular</a>
                <a href="{{ route('crearchollo') }}"><img src="{{ asset('assets/img/icono/crearchollo.png') }}"alt="nuevochollo" />Crear Chollo</a>
            </ul>
        </nav>
    </header>
    @yield('cuerpo')
</body>
</html>