<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VETlab</title>
    <link rel="icon" href="img/logo.PNG" type="image/x-icon">
<link rel="shortcut icon" href="img/logo.PNG" type="image/x-icon">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}?a=16">
    <script src="{{ asset('js/js.js')}}?a=16"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/main.css">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/main.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/locales-all.js"></script>
</head>
<body>
<div class="todo">
    <figure id="home">
        <img src="{{asset('img/R.jpg')}}" alt="">
    </figure>
    <nav class="nav-top">
        <div class="nav-icon">
            <a href="{{route('/')}}"><img src="{{asset('img/logo.PNG')}}" alt="" height="100"></a>
        </div>
        <ul class="nav">
            <li class="nav-item"><a href="{{route('/')}}" class="nav-link" data-href="inicio" style="color: black;">Inicio</a></li>
            <li class="nav-item"><a href="{{route('MascotasR')}}" class="nav-link" data-href="mascotas" style="color: black;">Mascotas</a></li>
            <li class="nav-item"><a href="{{route('ClientesR')}}" class="nav-link" data-href="clientes"style="color: black;">Clientes</a></li>
            <li class="nav-item"><a href="\Veterinaria\localizacion.html" class="nav-link" data-href="\Veterinaria\localizacion.html"style="color: black;">Sucursales</a></li>

        </ul>
    </nav>
    <script src="{{ asset('js/veterinariaCalendar.js')}}?a=16"></script>
    <section class="contenido" id="plataforma">
        @yield('contenido')
    </section>
    <footer>
        <div class="footer">    
            <img src="{{ asset('img/vet.png')}}" alt="" height="100%">
            
        </div>
    </footer>
<div>
</body>
</html>