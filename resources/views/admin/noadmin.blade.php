<!-- Enlazar el archivo CSS de Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
<!-- Enlazar el archivo JavaScript de Bootstrap después -->
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<!-- Enlazar jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- Fontawesome Link -->
<link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
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
    </div>
  </div>
</nav>
