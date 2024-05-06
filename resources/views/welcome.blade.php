<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tienda Online</title>
    <link rel="stylesheet" href="../resources/css/app.css">
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
                <a href="#home" class="nabar-logo">
                    <img src="../resources/Imagenes/logo.jpeg" alt="Logo de la empresa"> <!-- Inserta el logo aquí -->
                </a>
                <!-- Barra de búsqueda y botón -->
                <input type="text" class="search-bar" placeholder="Buscar...">
                <button class="search-button">Buscar</button> <!-- Botón de búsqueda -->
                <ul class="nav-links">
                    <li><a href="http://localhost/ecommers/public/#home">Inicio</a></li>
                    <li><a href="htttp://localhost/ecommers/public/Rmujer">Mujer</a></li>
                    <li><a href="htttp://localhost/ecommers/public/Rhombre">Hombre</a></li>
                    <li><a href="htttp://localhost/ecommers/public/Rniños">Infantil</a></li>
                    <li><a href="http://localhost/ecommers/public/Zapatos">Zapatos</a></li>
                </ul>
            </div>
            <div class="navbar-right">
                <a href="htttp://localhost/ecommers/public/Login" class="nav-link">Iniciar Sesión</a>
                <a href="htttp://localhost/ecommers/public/Registrarse" class="nav-link">Regístrate</a>
                <a href="htttp://localhost/ecommers/public/Carrito" class="cart-link">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="40" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                    <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                    <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                </svg>
                </a>
            </div>
        </nav>
    </header>

    <div class="carousel">
        <!-- Botón para ir a la imagen anterior -->
        <button class="carousel-btn prev-btn" id="prevBtn">‹</button>

        <!-- Contenedor del carrusel -->
        <div class="carousel-images" id="carouselImages">
            <img src="../resources/Imagenes/1.png" alt="Imagen 1"> <!-- Primer imagen -->
            <img src="../resources/Imagenes/2.png" alt="Imagen 2"> <!-- Segunda imagen -->
            <img src="../resources/Imagenes/3.jpg" alt="Imagen 3"> <!-- Tercer imagen -->
        </div>

        <!-- Botón para ir a la imagen siguiente -->
        <button class="carousel-btn next-btn" id="nextBtn">›</button>

        <!-- Puntos de navegación -->
        <div class="carousel-dots" id="carouselDots">
            <span class="dot" data-slide="1"></span>
            <span class="dot" data-slide="2"></span>
         <span class="dot" data-slide="3"></span>
        </div>
    </div>

    <div class="image-links">
        <h2>Ropa Para mujer </h2>
        <div class="image-container">
            <a href="#section1"> <!-- Enlace al destino -->
                <img src="path/to/your/image1.jpg" alt="Sección 1"> <!-- Imagen del enlace -->
                <p>Ir a Sección 1</p> <!-- Texto descriptivo -->
            </a>

            <a href="#section2">
                <img src="path/to/your/image2.jpg" alt="Sección 2">
                <p>Ir a Sección 2</p>
            </a>

            <a href="#section3">
             <img src="path/to/your/image3.jpg" alt="Sección 3">
                <p>Ir a Sección 3</p>
            </a>
        </div>
    </div>

    <div class="image-links">
        <h2>Ropa Para Hombres </h2>
        <div class="image-container">
            <a href="#section1"> <!-- Enlace al destino -->
                <img src="path/to/your/image1.jpg" alt="Sección 1"> <!-- Imagen del enlace -->
                <p>Ir a Sección 1</p> <!-- Texto descriptivo -->
            </a>

            <a href="#section2">
                <img src="path/to/your/image2.jpg" alt="Sección 2">
                <p>Ir a Sección 2</p>
            </a>

            <a href="#section3">
             <img src="path/to/your/image3.jpg" alt="Sección 3">
                <p>Ir a Sección 3</p>
            </a>
        </div>
    </div>

    <div class="image-links">
        <h2>Ropa De ejercicio </h2>
        <div class="image-container">
            <a href="#section1"> <!-- Enlace al destino -->
                <img src="path/to/your/image1.jpg" alt="Sección 1"> <!-- Imagen del enlace -->
                <p>Ir a Sección 1</p> <!-- Texto descriptivo -->
            </a>

            <a href="#section2">
                <img src="path/to/your/image2.jpg" alt="Sección 2">
                <p>Ir a Sección 2</p>
            </a>

            <a href="#section3">
             <img src="path/to/your/image3.jpg" alt="Sección 3">
                <p>Ir a Sección 3</p>
            </a>
        </div>
    </div>




    <script src="../resources/js/app.js"></script> <!-- Enlace al script separado -->
</body>
</html>
