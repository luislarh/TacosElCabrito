<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bebidas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Fontawesome Link -->
    <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
    <link href="/css/styles.css" rel="stylesheet">
    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
</head>

<body class="bg-gray">
    <nav class="navbar navbar-expand-lg navbar-dark bg-custom-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="/img/logo.png" class="logo d-inline-block align-top mr-2" alt="">
                <span class="ml-2 brand-text">Tacos El Cabrito</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-center border-top border-light" id="navbarText">
                <!-- Alinea los enlaces al centro y agrega borde -->
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom" href="{{ route('home') }}">Inicio</a>
                        <!-- Aplica la clase nav-link-custom -->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom" href="{{ route('productos') }}">Productos</a>
                        <!-- Aplica la clase nav-link-custom -->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom" href="{{ route('nosotros') }}">Nosotros</a>
                        <!-- Aplica la clase nav-link-custom -->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom" href="{{ route('contacto') }}">Contacto</a>
                        <!-- Aplica la clase nav-link-custom -->
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
                        <a href="{{ route('login.destroy') }}" class="btn btn-danger custom-btn">Cerrar Sesión</a>
                        <!-- Aplica la clase btn-custom-red -->
                    </li>
                    @else
                    <li class="nav-item mx-2">
                        <a href="{{ route('login.index') }}"
                            class="btn btn-success custom-btn font-weight-bold">Iniciar Sesión</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('register.index') }}"
                            class="btn btn-primary custom-btn font-weight-bold">Regístrate</a>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <main class="mt-4">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col">
                    <div class="card border border-custom-primary shadow">
                        <img src="{{ asset('img/vidrio.jpg') }}" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title text-custom-primary font-weight-bold">Vidrio</h5>
                            <p class="card-text">$19.00</p>
                            <div class="btn-group d-grid">
                                <a href="#" class="btn btn-custom-primary font-weight-bold add-to-cart"
                                    data-product="Vidrio" data-price="19.00">Agregar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card border border-custom-primary shadow">
                        <img src="{{ asset('img/lata.png') }}" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title text-custom-primary font-weight-bold">Lata</h5>
                            <p class="card-text">$21.00</p>
                            <div class="btn-group d-grid">
                                <a href="#" class="btn btn-custom-primary font-weight-bold add-to-cart"
                                    data-product="Lata" data-price="21.00">Agregar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card border border-custom-primary shadow">
                        <img src="{{ asset('img/600.jpg') }}" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title text-custom-primary font-weight-bold">600ml</h5>
                            <p class="card-text">$23.00</p>
                            <div class="btn-group d-grid">
                                <a href="#" class="btn btn-custom-primary font-weight-bold add-to-cart"
                                    data-product="600ml" data-price="23.00">Agregar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card border border-custom-primary shadow">
                        <img src="{{ asset('img/agua.jpg') }}" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title text-custom-primary font-weight-bold">Agua</h5>
                            <p class="card-text">$19.00</p>
                            <div class="btn-group d-grid">
                                <a href="#" class="btn btn-custom-primary font-weight-bold add-to-cart"
                                    data-product="Agua" data-price="19.00">Agregar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <div class="container mt-4">
        <div id="alerts"></div>
        <button id="send-cart" class="btn btn-success">Enviar lista recopilada</button>
        <p class="mt-2">Costo total: <span id="total-cost">$0.00</span></p>
    </div>

    <footer class="footer mt-auto py-3">
        <div class="container-fluid text-center">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6">
                    <span class="text-white mr-3 font-weight-bold">Síguenos en:</span>
                    <a href="#" class="text-white mr-3"><i class="fab fa-facebook-f fa-lg"></i></a>
                    <!-- Enlace de Facebook con el tamaño grande -->
                    <span class="text-white mr-3">|</span>
                    <span class="text-white mr-3 font-weight-bold">Dirección: Calle 123, Ciudad, País</span>
                    <!-- Dirección -->
                    <span class="text-white mr-3">|</span>
                    <span class="text-white mr-3 font-weight-bold">Teléfono: (123) 456-7890</span>
                    <!-- Teléfono -->
                    <span class="text-white mr-3">|</span>
                    <span class="text-white mr-3 font-weight-bold">Email: info@example.com</span>
                    <!-- Email -->
                    <span class="text-white mr-3">|</span>
                    <span class="text-white font-weight-bold">Página Desarrollada por Diego Barrera</span>
                    <!-- Texto de créditos -->
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-N17WN7GqZpc3xxVZY1UohwvljOQcSOlpWZsO7/pO7FArvrjGZ4FidLFy27Qv1G0N" crossorigin="anonymous">
    </script>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            var cartItems = {};

            // Función para manejar el clic en el botón "Agregar"
            $('.add-to-cart').click(function () {
                var productName = $(this).data('product');
                var productPrice = parseFloat($(this).data('price'));

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
                setTimeout(function () {
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
            $('#send-cart').click(function () {
                if (Object.keys(cartItems).length > 0) {
                    var message = "Lista de compras:\n\n";
                    for (var productName in cartItems) {
                        message += cartItems[productName].quantity + " " + productName + " - $" + (cartItems[productName].price * cartItems[productName].quantity).toFixed(2) + "\n";
                    }
                    var whatsappLink = 'https://wa.me/4171074769/?text=' + encodeURIComponent(message);
                    window.open(whatsappLink, '_blank');
                } else {
                    alert("Agregue al menos un artículo a la lista de compras antes de enviar.");
                }
            });
        });
    </script>
</body>

</html>
