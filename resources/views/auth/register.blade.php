<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Enlazar hojas de estilo de Bootstrap -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Enlazar Fontawesome -->
    <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
    <!-- Estilos personalizados -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <!-- Estilos para la animación de lluvia de imágenes -->
    <link href="{{ asset('css/rain.css') }}" rel="stylesheet">
    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">

</head>
<body class="bg-secondary"> <!-- Cambiar el color de fondo de la página -->

<!-- Contenedor para la lluvia de imágenes -->
<div class="rain-container">
    <img src="img/12.png" class="rain-drop">
    <!-- Agrega más imágenes según sea necesario -->
</div>

<div class="container d-flex justify-content-center align-items-center vh-100"> <!-- Centrar la tarjeta en la página -->
    <div class="card card-green"> <!-- Cambiar a clase card-green para el color verde -->
        <div class="card-header">
            <!-- Agregar el logo -->
            <img src="/img/logo.png" alt="Tacos El Cabrito Logo" class="logo">
        </div>
        <div class="card-body">
            <h1 class="text-center">Crear una cuenta</h1>
            <form method="POST" action="{{ route('register.store') }}">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" class="form-control form-control-light" id="name" name="name" value="{{ old('name') }}" required autofocus>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Correo electrónico</label>
                    <input type="email" class="form-control form-control-light" id="email" name="email" value="{{ old('email') }}" required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" class="form-control form-control-light" id="password" name="password" required autocomplete="new-password">
                </div>

                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Confirmar contraseña</label>
                    <input type="password" class="form-control form-control-light" id="password_confirmation" name="password_confirmation" required>
                </div>

                <button type="submit" class="btn btn-primary btn-block">Crear cuenta</button> <!-- Centrar el botón -->

                @if ($errors->any())
                    <div class="alert alert-danger mt-3" role="alert">
                        @foreach ($errors->all() as $error)
                            {{ $error }}<br>
                        @endforeach
                    </div>
                @endif
            </form>
            <div class="text-center mt-3">
                        ¿Ya tienes cuenta? <a href="{{ route('login.index') }}">Inicia sesión</a>
                    </div>
        </div>
    </div>
</div>

<!-- Enlace para iniciar sesión -->
<div class="text-center mt-3">
    ¿Ya tienes cuenta? <a href="{{ route('login.index') }}">Inicia sesión aquí</a>
</div>

<!-- Enlazar jQuery y Bootstrap JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
