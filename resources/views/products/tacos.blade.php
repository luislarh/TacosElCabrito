<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tacos</title>
    <!-- Enlazar hojas de estilo de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Fontawesome Link -->
    <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
    <!-- Tu archivo CSS personalizado -->
    <link href="/css/styles.css" rel="stylesheet">
    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
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
    </div>
</nav>

<!-- Contenido de tacos -->
<main class="mt-4">
<div class="container">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
        <div class="col">
            <div class="card border border-custom-primary shadow">
                <img src="{{ asset('img/barbacoa.jpg') }}" class="card-img-top" alt="Barbacoa">
                <div class="card-body text-center">
                    <h5 class="card-title text-custom-primary font-weight-bold">Barbacoa</h5>
                    <p class="card-text">$16</p>
                    <button type="button" class="btn btn-custom-primary font-weight-bold add-to-cart" data-product="Barbacoa" data-price="16">Quiero 1</button>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card border border-custom-primary shadow">
                <img src="{{ asset('img/montalayo.jpg') }}" class="card-img-top" alt="Montalayo">
                <div class="card-body text-center">
                    <h5 class="card-title text-custom-primary font-weight-bold">Montalayo</h5>
                    <p class="card-text">$16</p>
                    <button type="button" class="btn btn-custom-primary font-weight-bold add-to-cart" data-product="Montalayo" data-price="16">Quiero 1</button>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card border border-custom-primary shadow">
                <img src="{{ asset('img/cares.jpg') }}" class="card-img-top" alt="Cabeza de res">
                <div class="card-body text-center">
                    <h5 class="card-title text-custom-primary font-weight-bold">Cabeza de res</h5>
                    <p class="card-text">$16</p>
                    <button type="button" class="btn btn-custom-primary font-weight-bold add-to-cart" data-product="Cabeza de res" data-price="16">Quiero 1</button>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card border border-custom-primary shadow">
                <img src="{{ asset('img/caros.jpg') }}" class="card-img-top" alt="Costilla de res">
                <div class="card-body text-center">
                    <h5 class="card-title text-custom-primary font-weight-bold">Costilla de res</h5>
                    <p class="card-text">$16</p>
                    <button type="button" class="btn btn-custom-primary font-weight-bold add-to-cart" data-product="Costilla de res" data-price="16">Quiero 1</button>
                </div>
            </div>
        </div>
    </div>
</div>
</main>

<div class="container mt-3">
    <div id="alerts"></div>
    <div class="text-center">
        <button id="send-cart" class="btn btn-custom-primary font-weight-bold">Enviar lista recopilada</button>
    </div>
</div>

<!-- Enlazar jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- Enlazar el archivo JavaScript de Bootstrap después -->
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

<!-- Script de JavaScript -->
<script>
    $(document).ready(function() {
        var cartItems = {};

        // Función para manejar el clic en el botón "Quiero 1"
        $('.add-to-cart').click(function() {
            var productName = $(this).data('product');
            var productPrice = $(this).data('price');

            // Verificar si el producto ya está en el carrito
            if (cartItems.hasOwnProperty(productName)) {
                // Incrementar la cantidad del producto
                cartItems[productName].quantity++;
            } else {
                // Agregar el producto al carrito con cantidad 1
                cartItems[productName] = {
                    price: productPrice,
                    quantity: 1
                };
            }

            var $alert = $('<div class="alert alert-success alert-dismissible fade show" role="alert">Se agregó ' + productName + ' a la lista de compras.</div>');
            $('#alerts').prepend($alert); // Agrega la alerta al principio para que aparezca desde arriba
            setTimeout(function() {
                $alert.alert('close'); // Cierra la alerta después de 3 segundos
            }, 3000);

            // Actualizar el costo total
            updateTotalCost();
        });

        // Función para actualizar el costo total
        function updateTotalCost() {
            var totalCost = 0;
            for (var productName in cartItems) {
                totalCost += cartItems[productName].price * cartItems[productName].quantity;
            }
            $('#total-cost').text('$' + totalCost.toFixed(2)); // Mostrar el costo total en el HTML
        }

        // Función para manejar el clic en el botón "Enviar lista recopilada"
        $('#send-cart').click(function() {
            if (Object.keys(cartItems).length > 0) {
                var message = "Lista de compras:\n\n";
                for (var productName in cartItems) {
                    message += cartItems[productName].quantity + " tacos de " + productName + " - Precio unitario: $" + cartItems[productName].price + "\n";
                }
                var whatsappLink = 'https://wa.me/4171074769?text=' + encodeURIComponent(message);
                window.open(whatsappLink, '_blank');

                // Actualizar el costo total después de enviar la lista
                updateTotalCost();
            } else {
                alert("Agregue al menos un artículo a la lista de compras antes de enviar.");
            }
        });
    });
</script>

<footer class="footer mt-auto py-3">
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

<!-- Enlazar jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- Enlazar el archivo JavaScript de Bootstrap después -->
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
