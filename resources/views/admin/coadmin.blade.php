<!-- Enlazar el archivo CSS de Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<link href="/css/bootstrap.min.css" rel="stylesheet">
<!-- Enlazar el archivo JavaScript de Bootstrap después -->
<script src="/js/bootstrap.bundle.min.js"></script>
<!-- Enlazar jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- Fontawesome Link -->
<link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
<link href="/css/styles.css') }}" rel="stylesheet">
<link rel="icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">

<!-- Image and text -->
<nav class="navbar navbar-dark bg-blue-900">
    <a class="navbar-brand d-flex align-items-center" href="#">
        <img src="/img/logo.png" class="logo d-inline-block align-top mr-2" alt="">
        <span class="ml-2 brand-text">BritoAdmin</span>
    </a>
    <!-- Inicio de sesión y cierre de sesión -->
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
                <a href="{{ route('login.index') }}" class="btn btn-success custom-btn custom-btn:hover">Iniciar Sesión</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('register.index') }}" class="btn btn-primary custom-btn">Regístrate</a>
            </li>
        @endif
    </ul>
</nav>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="form-container bg-orange-200 p-4 rounded">
                <h2 class="mb-4">Formulario de Contacto</h2>
                <!-- Formulario -->
                <form action="{{ route('mensajes.store') }}" method="POST">
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
            </div>
        </div>
    </div>
</div>



    </section>
