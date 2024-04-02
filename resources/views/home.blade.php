<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <!-- Enlazar hojas de estilo de Bootstrap -->
     <!-- Enlazar hojas de estilo de Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!-- Enlazar Fontawesome -->
    <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
    <!-- Enlazar hojas de estilo personalizadas -->
    <link href="/css/styles.css" rel="stylesheet">
    <!-- Enlazar el archivo CSS personalizado -->
    <link href="/css/custom.css" rel="stylesheet">
    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">

    <title>Inicio</title>

</head>
<body>

<!-- Barra de navegación -->
<nav class="navbar navbar-expand-lg navbar-dark bg-custom-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="/img/logo.png" class="logo d-inline-block align-top mr-2" alt="">
            <span class="ml-2 brand-text">Tacos El Cabrito</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse justify-content-center border-top border-light" id="navbarText"> <!-- Alinea los enlaces al centro y agrega borde -->
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link nav-link-custom" href="{{ route('home') }}">Inicio</a> <!-- Aplica la clase nav-link-custom -->
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-custom" href="{{ route('productos') }}">Productos</a> <!-- Aplica la clase nav-link-custom -->
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-custom" href="{{ route('nosotros') }}">Nosotros</a> <!-- Aplica la clase nav-link-custom -->
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-custom" href="{{ route('contacto') }}">Contacto</a> <!-- Aplica la clase nav-link-custom -->
                </li>
            </ul>
        </div>
        
        <div class="navbar-text">
    <!-- Inicio de sesión y registro -->
    <ul class="navbar-nav">
        @if(auth()->check())
            <li class="nav-item mx-2">
                <p class="nav-link">Bienvenido <b>{{ auth()->user()->name }}</b></p>
            </li>
            <li class="nav-item">
                <a href="{{ route('login.destroy') }}" class="btn btn-danger custom-btn">Cerrar Sesión</a> <!-- Aplica la clase btn-custom-red -->
            </li>
        @else
            <li class="nav-item mx-2">
                <a href="{{ route('login.index') }}" class="btn btn-success custom-btn font-weight-bold">Iniciar Sesión</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('register.index') }}" class="btn btn-primary custom-btn font-weight-bold">Regístrate</a>
            </li>
        @endif
    </ul>
</div>

</nav>
<div class="carousel-container">
    <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false" data-bs-ride="carousel" data-bs-interval="3000"> <!-- Hacer el carrusel automático con intervalo de 3 segundos -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/tacobarba.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/consom.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/102.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>
</div>
<!-- CARDS -->
<div class="container mt-5">
    <div class="row justify-content-center">
        <!-- Card con imagen -->
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
            <div class="card">
                <div class="card-img-container">
                    <img src="img/facha.jpg" class="card-img-top" alt="Imagen 1">
                </div>
                <div class="card-body">
                    <!-- Contenido de la card -->
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
    <div class="card">
    <div class="card-body text-center bg-orange" id="historia" data-toggle="collapse" data-target="#card2" aria-expanded="false" aria-controls="card2">
    <h5 class="card-title text-white font-weight-bold">Historia</h5>
    <p class="card-text text-white font-weight-bold">Haz clic para leer más.</p> <!-- Clase text-white para el color blanco, font-weight-bold para negrita -->
    <a href="#" class="btn btn-danger">Leer más</a> <!-- Clase btn-danger para el color rojo -->
</div>

        <div class="collapse" id="card2">
        <div class="card card-body bg-gray text-center"> <!-- Agrega la clase text-center para alinear el texto -->
    <p class="font-weight-bold"> <!-- Agrega la clase font-weight-bold para hacer el texto en negritas -->
        La taquería "Tacos El Cabrito" fue fundada el 4 de noviembre de 2016 en Acámbaro, Guanajuato, por Antonio Brito Torres. Este emprendimiento surgió como un anhelo personal de Antonio, quien previamente trabajaba en otra taquería y soñaba con tener la suya propia.
    </p>
    <p class="font-weight-bold"> <!-- Agrega la clase font-weight-bold para hacer el texto en negritas -->
        El primer establecimiento se inauguró en la calle Primero de Mayo, marcando el inicio de la trayectoria de "Tacos El Cabrito". Con el tiempo, el negocio creció en popularidad, llevando a la apertura de un segundo local en la calle Guerrero. Actualmente, la taquería opera en ambos sitios y se especializa en tacos de barbacoa y de cabeza.
    </p>
</div>

        </div>
    </div>
</div>


        <!-- Card con imagen -->
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
            <div class="card">
                <div class="card-img-container">
                    <img src="img/fach.jpeg" class="card-img-top" alt="Imagen 2">
                </div>
                <div class="card-body">
                    <!-- Contenido de la card -->
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Enlazar jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- Enlazar el archivo JavaScript de Bootstrap después -->
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<!-- Tu código JavaScript personalizado -->
<!-- Enlazar jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Tu código JavaScript personalizado -->
<script>
    $(document).ready(function(){
        $('#historia').click(function(){
            $('#card2').toggleClass('show');
        });
    });
</script>
<footer class="footer mt-auto py-3">
    <div class="container-fluid text-center">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-6">
                <span class="text-white mr-3 font-weight-bold">Síguenos en:</span>
                <a href="#" class="text-white mr-3"><i class="fab fa-facebook-f fa-lg"></i></a> <!-- Enlace de Facebook con el tamaño grande -->
                <span class="text-white mr-3">|</span>
                <span class="text-white mr-3 font-weight-bold">Dirección: Calle 123, Ciudad, País</span> <!-- Dirección -->
                <span class="text-white mr-3">|</span>
                <span class="text-white mr-3 font-weight-bold">Teléfono: (123) 456-7890</span> <!-- Teléfono -->
                <span class="text-white mr-3">|</span>
                <span class="text-white mr-3 font-weight-bold">Email: info@example.com</span> <!-- Email -->
                <span class="text-white mr-3">|</span>
                <span class="text-white font-weight-bold">Página Desarrollada por Diego Barrera</span> <!-- Texto de créditos -->
            </div>
        </div>
    </div>
</footer>






</body>
</html>
