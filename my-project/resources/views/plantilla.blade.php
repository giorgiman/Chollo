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
                <a href="{{ route('inicio') }}"><img src="{{ asset('assets/img/icono/inicio.png') }}" alt="casa" /><span>Inicio</span></a>
                <a href="{{ route('chollos') }}"><img src="{{ asset('assets/img/icono/chollo.png') }}"alt="nuevo" /><span>Chollos</span></a>
                <a href="{{ route('nuevos') }}"><img src="{{ asset('assets/img/icono/reciente.png') }}"alt="nuevo" /><span>Nuevo</span></a>
                <a href="{{ route('destacados') }}"><img src="{{ asset('assets/img/icono/popular.png') }}"alt="casa" /><span>Popular</span></a>
                <a class="ultimaa" href="{{ route('crearchollo') }}"><img src="{{ asset('assets/img/icono/crearchollo.png') }}"alt="nuevochollo" /><span>Crear Chollo</span></a>
            </ul>
        </nav>
    </header>
    <main>
    @yield('cuerpo')
</main>
    <footer id="main-footer">
        <p>&copy; 2021 Copyright Creado con derechos suficientes Para Aprobar - <a href="{{ route('inicio') }}">(Volver al
                inicio)</a></p>
        <h4>Redes sociales</h4>
        <div class="redes-sociales">
            <a href="https://es-es.facebook.com"><img src="{{ asset('assets/img/icono/facebook.png') }}" alt="facebook" /></a>
            <a href="https://twitter.com/?lang=es"><img src="{{ asset('assets/img/icono/twitter.png') }}" alt="twitter" /></a>
            <a href="https://wa.me/34678567876"><img src="{{ asset('assets/img/icono/whatsapp.png') }}" alt="whatsapp" /></a>
        </div>

    </footer>
</body>
</html>