<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
 
</head>
<body>
    <header>
        <a id="logo-header" href=" {{ route('inicio') }} ">
            <img class="logo-image" src="assets/img/chollo.png" alt="chollo" />
            <span class="site-name">ChollosGiorgi.com</span>  
        </a>

        <nav>
            <ul><li>Enlace 1</li>
                <li>Enlace 2</li>
                <li>Enlace 3</li>
                <li>Enlace 4</li>
            </ul>
        </nav>
    </header>
    @yield('cuerpo')
</body>
</html>