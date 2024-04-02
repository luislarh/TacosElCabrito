<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

 <!-- Enlazar el archivo CSS de Bootstrap -->
  <link href="/css/bootstrap.min.css" rel="stylesheet">
  <!-- Enlazar el archivo JavaScript de Bootstrap después -->
  <script src="/js/bootstrap.bundle.min.js"></script>
<!-- Enlazar jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <!-- Fontawesome Link -->
  <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
  <link href="/css/styles.css" rel="stylesheet">
  <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">



</head>
<title>Nosotros</title>

<!-- Image and text -->
<!-- Image and text -->
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
<body>
  
</nav>

</nav>
<style>
    .card-custom {
        border: 2px solid red; /* Borde de color rojo */
        background-color: #adb5bd;
    }
    .card-custom .card-body {
        text-align: justify; /* Texto justificado */
    }
</style>

<main class="mt-4">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <div class="card card-custom">
                    <div class="card-body">
                        <h5 class="card-title">Misión</h5>
                        <p class="card-text">Nuestra misión en Tacos El Cabrito es proporcionar a nuestros clientes la experiencia más auténtica y deliciosa de la comida mexicana, especialmente en la preparación de tacos de barbacoa y cabeza. Nos esforzamos por mantener la tradición y la calidad en cada platillo que servimos, mientras ofrecemos un ambiente cálido y acogedor que haga sentir a nuestros clientes como en casa.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card-custom">
                    <div class="card-body">
                        <h5 class="card-title">Visión</h5>
                        <p class="card-text">En Tacos El Cabrito, nuestra visión es convertirnos en la taquería de referencia en Acámbaro, Guanajuato, y sus alrededores, reconocida por la calidad excepcional de nuestros tacos y el excelente servicio al cliente. Nos esforzamos por expandir nuestra presencia y ofrecer nuestras delicias culinarias a una audiencia más amplia, manteniendo siempre nuestra pasión por la autenticidad y la excelencia en todo lo que hacemos.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card-custom">
                    <div class="card-body">
                        <h5 class="card-title">Valores</h5>
                        <ul class="card-text">
                            <li>Calidad: Nos comprometemos a utilizar los mejores ingredientes frescos y técnicas de cocina tradicionales para garantizar la máxima calidad en cada taco que servimos.</li>
                            <li>Autenticidad: Valoramos y respetamos las raíces de la cocina mexicana, manteniendo la autenticidad en cada receta y preparación.</li>
                            <li>Servicio al cliente: Priorizamos la satisfacción y la experiencia de nuestros clientes, brindando un servicio amable, atento y eficiente en todo momento.</li>
                            <li>Integridad: Operamos con honestidad, transparencia y ética en todas nuestras interacciones comerciales y relaciones con los clientes.</li>
                            <li>Comunidad: Nos comprometemos a contribuir positivamente al bienestar de nuestra comunidad, apoyando iniciativas locales y promoviendo la cultura y la tradición mexicana.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>





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
