<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Fontawesome Link -->
    <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
    <!-- Tu archivo CSS personalizado -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />

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
        
        <div class="collapse navbar-collapse justify-content-center border-top border-light" id="navbarText">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link nav-link-custom" href="{{ route('home') }}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-custom" href="{{ route('productos') }}">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-custom" href="{{ route('nosotros') }}">Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-custom" href="{{ route('contacto') }}">Contacto</a>
                </li>
            </ul>
        </div>
        
        <div class="navbar-text">
            <ul class="navbar-nav">
                @if(auth()->check())
                    <li class="nav-item mx-2">
                        <p class="nav-link">Bienvenido <b>{{ auth()->user()->name }}</b></p>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('login.destroy') }}" class="btn btn-danger custom-btn">Cerrar Sesión</a>
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
    </div>
</nav>

<style>
    .form-container {
        background-color: orange;
        margin-bottom: 30px;
    }
    .form-container .btn-primary {
        display: block;
        margin: 0 auto;
    }
    #mi_mapa {
        margin-top: 30px;
        margin-bottom: 30px;
    }
    .footer {
        margin-top: 30px;
    }
</style>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="form-container bg-orange p-4 rounded">
                <h2 class="mb-4 text-center">Formulario de Contacto</h2>
                <form id="contact-form" action="{{ route('mensajes.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nombre_usuario" class="form-label">Nombre Usuario</label>
                        <input type="text" name="nombre_usuario" class="form-control" id="nombre_usuario" placeholder="Ingrese su nombre">
                    </div>
                    <div class="mb-3">
                        <label for="mensaje" class="form-label">Mensaje</label>
                        <textarea name="mensaje" class="form-control" id="mensaje" rows="3" placeholder="Ingrese su mensaje"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">Teléfono</label>
                        <input type="text" name="telefono" class="form-control" id="telefono" placeholder="Ingrese su teléfono">
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
                <a href="https://wa.me/524171074769" class="btn btn-success btn-whatsapp mt-3 d-block mx-auto" target="_blank">Enviar mensaje de WhatsApp</a>
            </div>
        </div>
    </div>
</div>

<div id="mi_mapa" style="width: 100%; height: 600px;"></div>

<footer class="footer fixed-bottom py-3 bg-custom-primary">
    <div class="container-fluid text-center">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-6">
                <span class="text-white mr-3 font-weight-bold">Síguenos en:</span>
                <a href="#" class="text-white mr-3"><i class="fab fa-facebook-f fa-lg"></i></a>
                <span class="text-white mr-3">|</span>
                <span class="text-white mr-3 font-weight-bold">Dirección: Calle 123, Ciudad, País</span>
                <span class="text-white mr-3">|</span>
                <span class="text-white mr-3 font-weight-bold">Teléfono: (123) 456-7890</span>
                <span class="text-white mr-3">|</span>
                <span class="text-white mr-3 font-weight-bold">Email: info@example.com</span>
                <span class="text-white mr-3">|</span>
                <span class="text-white font-weight-bold">Página Desarrollada por Diego Barrera</span>
            </div>
        </div>
    </div>
</footer>

<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

<script>
    let map = L.map('mi_mapa').setView([20.03288,-100.72408], 19);
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);
    L.marker([20.03288,-100.72408]).addTo(map)
        .bindPopup('Tacos El Cabrito.')
        .openPopup();
</script>

</body>
</html>
