<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../resources/css/menu.css">
    <link rel="stylesheet" href="../resources/css/crear_p.css">
</head>
<body>
    <!-- Banner de desplazamiento para promociones -->
    <div class="scrolling-banner" id="scrolling-banner">
        <div class="scrolling-text-wrapper">
            <!-- Duplicar el texto para un efecto continuo -->
            <span class="scrolling-text">
                Por el Día de la Madre | Un descuento del 20% <span style="color: red;">❤</span>
                <span class="separator"></span>
                Por el Día de la Madre | Un descuento del 20% <span style="color: red;">❤</span>
                <span class="separator"></span>
                Por el Día de la Madre | Un descuento del 20% <span style="color: red;">❤</span>
            </span>
            <!-- Segunda copia para efecto continuo -->
            <span class="scrolling-text">
                Por el Día de la Madre | Un descuento del 20% <span style="color: red;">❤</span>
                <span class="separator"></span>
                Por el Día de la Madre | Un descuento del 20% <span style="color: red;">❤</span>
                <span class="separator"></span>
                Por el Día de la Madre | Un descuento del 20% <span style="color: red;">❤</span>
                <span class="separator"></span>
                Por el Día de la Madre | Un descuento del 20% <span style="color: red;">❤</span>
            </span>
        </div>
    </div>

    <header>
        <nav class="navbar">
                
            <div class="navbar-left">
                <!-- Botón del menú de hamburguesa para pantallas pequeñas -->
                <span class="menu-toggle">&#9776;</span>
                <!-- Enlace del logo que redirige a la página de inicio -->
                <a href="http://localhost/ecommers/public" class="nabar-logo">
                    <img src="../resources/Imagenes_P/logo.jpeg" alt="Logo de la empresa"> <!-- Inserta el logo aquí -->
                </a>
                <!-- Barra de búsqueda y botón -->
                <input type="text" class="search-bar" placeholder="Buscar...">
                <button class="search-button">Buscar</button> <!-- Botón de búsqueda -->
                <ul class="nav-links">
                    <li><a href="http://localhost/ecommers/public">Inicio</a></li>
                    <li><a href="http://localhost/ecommers/public/Rmujer">Mujer</a></li>
                    <li><a href="http://localhost/ecommers/public/Rhombre">Hombre</a></li>
                    <li><a href="http://localhost/ecommers/public/Rniños">Infantil</a></li>
                    <li><a href="http://localhost/ecommers/public/Zapatos">Zapatos</a></li>
                </ul>
            </div>
            <div class="navbar-right">
                <a href="http://localhost/ecommers/public/Login" class="nav-link">Iniciar Sesión</a>
                <a href="http://localhost/ecommers/public/Registrarse" class="nav-link">Regístrate</a>
                <a href="http://localhost/ecommers/public/Carrito" class="cart-link">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="40" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                    <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                    <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                </svg>
                </a>
            </div>
        </nav>
    </header>

    <div class="product-form-container">
    <h2>Agregar Producto</h2> <!-- Título del formulario -->

    <form action="/productos" method="POST" enctype="multipart/form-data"> <!-- Envío de formularios y subida de imágenes -->
        @csrf <!-- Protección CSRF para seguridad -->

        <!-- Campo para la marca del producto -->
        <div class="form-group">
            <label for="marca">Marca:</label>
            <input type="text" id="marca" name="marca" required placeholder="Marca del producto">
        </div>

        <!-- Campo para la descripción -->
        <div class="form-group">
            <label for="descripcion">Descripción:</label>
            <textarea id="descripcion" name="descripcion" required placeholder="Descripción del producto"></textarea>
        </div>

        <!-- Campo para el precio original -->
        <div class="form-group">
            <label for="precio-original">Precio Original:</label>
            <input type="number" id="precio-original" name="precio_original" required placeholder="Precio original" min="0">
        </div>

        <!-- Campo para el descuento (opcional) -->
        <div class="form-group">
            <label for="descuento">Descuento (%):</label>
            <input type="number" id="descuento" name="descuento" placeholder="Descuento en porcentaje" min="0" max="100">
        </div>

        <!-- Campo para el precio con descuento (calculado) -->
        <div class="form-group">
            <label for="precio-descuento">Precio con Descuento:</label>
            <input type="number" id="precio-descuento" name="precio_descuento" readonly> <!-- Solo lectura -->
        </div>

        <!-- Campo para la imagen del producto -->
        <div class="form-group">
            <label for="imagen">Imagen:</label>
            <input type="file" id="imagen" name="imagen" accept="image/*" required> <!-- Subida de imágenes -->
        </div>

        <!-- Botón para enviar el formulario -->
        <button type="submit" class="submit-button">Agregar Producto</button>
    </form>
</div>

<!-- Script para calcular el precio con descuento -->
<script>
    document.getElementById('descuento').addEventListener('input', function() {
        const precioOriginal = parseFloat(document.getElementById('precio-original').value) || 0;
        const descuento = parseFloat(this.value) || 0;
        const precioConDescuento = precioOriginal - (precioOriginal * descuento / 100);
        
        document.getElementById('precio-descuento').value = precioConDescuento.toFixed(2); // Dos decimales
    });
</script>


    <!-- Botón flotante de WhatsApp -->
    <a href="https://wa.me/51960724439" target="_blank" title="Contáctanos por WhatsApp" class="whatsapp-float">
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" style="width: 50px; height: 50px;">
    </a>
</body>
</html>