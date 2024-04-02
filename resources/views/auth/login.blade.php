<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Enlazar hojas de estilo de Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!-- Enlazar Fontawesome -->
    <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
    <!-- Estilos personalizados -->
    <link href="/css/styles.css" rel="stylesheet">
    <!-- Estilos para la animación de lluvia de imágenes -->
    <link href="/css/rain.css'" rel="stylesheet">
    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">

</head>
<body class="bg-secondary"> <!-- Cambiar el color de fondo de la página -->

<!-- Contenedor para la lluvia de imágenes -->
<div class="rain-container">
    <img src="img/tacolluvia.jpg" class="rain-drop">
  

    <!-- Agrega más imágenes según sea necesario -->
</div>

<div class="container d-flex justify-content-center align-items-center vh-100"> <!-- Centrar la tarjeta en la página -->
    <div class="card card-orange">
        <div class="card-header">
            <!-- Agregar el logo -->
            <img src="/img/logo.png" alt="Tacos El Cabrito Logo" class="logo">
        </div>
        <div class="card-body">
            <h1 class="text-center">Iniciar sesión</h1>
            <form method="POST" action="{{ route('login.store') }}">
                @csrf

                <div class="mb-3">
                    <label for="email" class="form-label">Correo electrónico</label>
                    <input type="email" class="form-control form-control-light" id="email" name="email" value="{{ old('email') }}" required autofocus> <!-- Cambiar el color del input -->
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" class="form-control form-control-light" id="password" name="password" required autocomplete="current-password"> <!-- Cambiar el color del input -->
                </div>

                <div class="mb-3 form-check custom-checkbox">
                    <input type="checkbox" class="form-check-input" id="remember" name="remember">
                     <label class="form-check-label" for="remember">Recordarme</label>
                </div>

                <div class="text-center mt-3">
                    <button type="submit" class="btn btn-primary">Iniciar sesión</button>
                </div>
            </form>
            <!-- Enlace para registrarse -->
            <div class="text-center mt-3">
                ¿No tienes cuenta? <a href="{{ route('register.index') }}">Regístrate aquí</a>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger mt-3" role="alert">
                    @foreach ($errors->all() as $error)
                        {{ $error }}<br>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</div>

<!-- Enlazar jQuery y Bootstrap JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
