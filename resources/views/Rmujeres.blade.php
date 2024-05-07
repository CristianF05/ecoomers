<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../resources/css/menu.css">
    <link rel="stylesheet" href="../resources/css/producto.css">
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

    <div class="content-wrapper">
        <!-- Barra lateral para filtros -->
        <div class="sidebar">
            <h3>Filtros</h3>
            <ul>
                <li><a href="#pantalones">Pantalones</a></li>
                <li><a href="#poleras">Poleras</a></li>
                <li><a href="#polos">Polos</a></li>
                <li><a href="#descuentos">Descuentos</a></li>
            </ul>
        </div>
    </div>


<!-- Tarjeta del producto -->
<div class="product-list-wrapper">
<h2 class="product-list-title">Productos Destacados</h2>

<div class="product-list">
    <div class="product-card">
        <!-- Contenedor para la imagen del producto con la etiqueta de descuento -->
        <div class="product-image">
            <span class="discount-tag">20% OFF</span> <!-- Etiqueta de descuento -->
            <img id="product-img-1" src="../resources/imagenes_P/deporte3.jpeg" alt="Producto"> <!-- Imagen del producto -->
        </div>

        <!-- Puntos para cambiar la imagen -->
        <div class="image-points" id="points-1">
            <span class="point point1" data-image="../resources/imagenes_P/deporte3.jpeg"></span> <!-- Azul -->
            <span class="point point2" data-image="../resources/imagenes_P/mujer1.png"></span> <!-- Naranja -->
            <span class="point point3" data-image="../resources/imagenes_P/mujer3.png"></span> <!-- Verde -->
        </div>

        <!-- Información del producto -->
        <div class="product-info">
            <!-- Marca del producto -->
            <h3 class="product-brand">Marca XYZ</h3>
            <!-- Descripción del producto -->
            <p class="product-description">
                Producto de alta calidad, ideal para diversas aplicaciones.
            </p>
            <!-- Precios y descuentos -->
            <div class="product-pricing">
                <span class="product-original-price">$59.99</span> <!-- Precio original -->
                <span class="product-discounted-price">$49.99</span> <!-- Precio con descuento -->
            </div>
            <!-- Botón para agregar al carrito -->
            <button class="add-to-cart-btn">Agregar al carrito</button>
        </div>
    </div>

    <div class="product-card">
        <!-- Contenedor para la imagen del producto con la etiqueta de descuento -->
        <div class="product-image">
            <span class="discount-tag">20% OFF</span> <!-- Etiqueta de descuento -->
            <img id="product-img-2" src="../resources/imagenes_P/deporte3.jpeg" alt="Producto"> <!-- Imagen del producto -->
        </div>

        <!-- Puntos para cambiar la imagen -->
        <div class="image-points" id="points-2">
            <span class="point point1" data-image="../resources/imagenes_P/deporte3.jpeg"></span> <!-- Azul -->
            <span class="point point2" data-image="../resources/imagenes_P/mujer2.png"></span> <!-- Naranja -->
            <span class="point point3" data-image="../resources/imagenes_P/mujer3.png"></span> <!-- Verde -->
        </div>

        <!-- Información del producto -->
        <div class="product-info">
            <!-- Marca del producto -->
            <h3 class="product-brand">Marca XYZ</h3>
            <!-- Descripción del producto -->
            <p class="product-description">
                Producto de alta calidad, ideal para diversas aplicaciones.
            </p>
            <!-- Precios y descuentos -->
            <div class="product-pricing">
                <span class="product-original-price">$59.99</span> <!-- Precio original -->
                <span class="product-discounted-price">$49.99</span> <!-- Precio con descuento -->
            </div>
            <!-- Botón para agregar al carrito -->
            <button class="add-to-cart-btn">Agregar al carrito</button>
        </div>
    </div>

    <div class="product-card">
        <!-- Contenedor para la imagen del producto con la etiqueta de descuento -->
        <div class="product-image">
            <span class="discount-tag">20% OFF</span> <!-- Etiqueta de descuento -->
            <img id="product-img-3" src="../resources/imagenes_P/deporte3.jpeg" alt="Producto"> <!-- Imagen del producto -->
        </div>

        <!-- Puntos para cambiar la imagen -->
        <div class="image-points" id="points-3">
            <span class="point point1" data-image="../resources/imagenes_P/deporte3.jpeg"></span> <!-- Azul -->
            <span class="point point2" data-image="../resources/imagenes_P/mujer2.png"></span> <!-- Naranja -->
            <span class="point point3" data-image="../resources/imagenes_P/mujer3.png"></span> <!-- Verde -->
        </div>

        <!-- Información del producto -->
        <div class="product-info">
            <!-- Marca del producto -->
            <h3 class="product-brand">Marca XYZ</h3>
            <!-- Descripción del producto -->
            <p class="product-description">
                Producto de alta calidad, ideal para diversas aplicaciones.
            </p>
            <!-- Precios y descuentos -->
            <div class="product-pricing">
                <span class="product-original-price">$59.99</span> <!-- Precio original -->
                <span class="product-discounted-price">$49.99</span> <!-- Precio con descuento -->
            </div>
            <!-- Botón para agregar al carrito -->
            <button class="add-to-cart-btn">Agregar al carrito</button>
        </div>
    </div>

    <div class="product-card">
        <!-- Contenedor para la imagen del producto con la etiqueta de descuento -->
        <div class="product-image">
            <span class="discount-tag">20% OFF</span> <!-- Etiqueta de descuento -->
            <img id="product-img-4" src="../resources/imagenes_P/deporte3.jpeg" alt="Producto"> <!-- Imagen del producto -->
        </div>

        <!-- Puntos para cambiar la imagen -->
        <div class="image-points" id="points-4">
            <span class="point point1" data-image="../resources/imagenes_P/deporte3.jpeg"></span> <!-- Azul -->
            <span class="point point2" data-image="../resources/imagenes_P/mujer2.png"></span> <!-- Naranja -->
            <span class="point point3" data-image="../resources/imagenes_P/mujer3.png"></span> <!-- Verde -->
        </div>

        <!-- Información del producto -->
        <div class="product-info">
            <!-- Marca del producto -->
            <h3 class="product-brand">Marca XYZ</h3>
            <!-- Descripción del producto -->
            <p class="product-description">
                Producto de alta calidad, ideal para diversas aplicaciones.
            </p>
            <!-- Precios y descuentos -->
            <div class="product-pricing">
                <span class="product-original-price">$59.99</span> <!-- Precio original -->
                <span class="product-discounted-price">$49.99</span> <!-- Precio con descuento -->
            </div>
            <!-- Botón para agregar al carrito -->
            <button class="add-to-cart-btn">Agregar al carrito</button>
        </div>
    </div>

</div>
</div>

<div class="product-list-wrapper">
<h2 class="product-list-title">Productos Destacados</h2>
<div class="product-list">
    <div class="product-card">
        <!-- Contenedor para la imagen del producto con la etiqueta de descuento -->
        <div class="product-image">
            <span class="discount-tag">20% OFF</span> <!-- Etiqueta de descuento -->
            <img id="product-img-5" src="../resources/imagenes_P/deporte3.jpeg" alt="Producto"> <!-- Imagen del producto -->
        </div>

        <!-- Puntos para cambiar la imagen -->
        <div class="image-points" id="points-5">
            <span class="point point1" data-image="../resources/imagenes_P/deporte3.jpeg"></span> <!-- Azul -->
            <span class="point point2" data-image="../resources/imagenes_P/mujer1.png"></span> <!-- Naranja -->
            <span class="point point3" data-image="../resources/imagenes_P/mujer3.png"></span> <!-- Verde -->
        </div>

        <!-- Información del producto -->
        <div class="product-info">
            <!-- Marca del producto -->
            <h3 class="product-brand">Marca XYZ</h3>
            <!-- Descripción del producto -->
            <p class="product-description">
                Producto de alta calidad, ideal para diversas aplicaciones.
            </p>
            <!-- Precios y descuentos -->
            <div class="product-pricing">
                <span class="product-original-price">$59.99</span> <!-- Precio original -->
                <span class="product-discounted-price">$49.99</span> <!-- Precio con descuento -->
            </div>
            <!-- Botón para agregar al carrito -->
            <button class="add-to-cart-btn">Agregar al carrito</button>
        </div>
    </div>

    <div class="product-card">
        <!-- Contenedor para la imagen del producto con la etiqueta de descuento -->
        <div class="product-image">
            <span class="discount-tag">20% OFF</span> <!-- Etiqueta de descuento -->
            <img id="product-img-6" src="../resources/imagenes_P/deporte3.jpeg" alt="Producto"> <!-- Imagen del producto -->
        </div>

        <!-- Puntos para cambiar la imagen -->
        <div class="image-points" id="points-6">
            <span class="point point1" data-image="../resources/imagenes_P/deporte3.jpeg"></span> <!-- Azul -->
            <span class="point point2" data-image="../resources/imagenes_P/mujer2.png"></span> <!-- Naranja -->
            <span class="point point3" data-image="../resources/imagenes_P/mujer3.png"></span> <!-- Verde -->
        </div>

        <!-- Información del producto -->
        <div class="product-info">
            <!-- Marca del producto -->
            <h3 class="product-brand">Marca XYZ</h3>
            <!-- Descripción del producto -->
            <p class="product-description">
                Producto de alta calidad, ideal para diversas aplicaciones.
            </p>
            <!-- Precios y descuentos -->
            <div class="product-pricing">
                <span class="product-original-price">$59.99</span> <!-- Precio original -->
                <span class="product-discounted-price">$49.99</span> <!-- Precio con descuento -->
            </div>
            <!-- Botón para agregar al carrito -->
            <button class="add-to-cart-btn">Agregar al carrito</button>
        </div>
    </div>

    <div class="product-card">
        <!-- Contenedor para la imagen del producto con la etiqueta de descuento -->
        <div class="product-image">
            <span class="discount-tag">20% OFF</span> <!-- Etiqueta de descuento -->
            <img id="product-img-7" src="../resources/imagenes_P/deporte3.jpeg" alt="Producto"> <!-- Imagen del producto -->
        </div>

        <!-- Puntos para cambiar la imagen -->
        <div class="image-points" id="points-7">
            <span class="point point1" data-image="../resources/imagenes_P/deporte3.jpeg"></span> <!-- Azul -->
            <span class="point point2" data-image="../resources/imagenes_P/mujer2.png"></span> <!-- Naranja -->
            <span class="point point3" data-image="../resources/imagenes_P/mujer3.png"></span> <!-- Verde -->
        </div>

        <!-- Información del producto -->
        <div class="product-info">
            <!-- Marca del producto -->
            <h3 class="product-brand">Marca XYZ</h3>
            <!-- Descripción del producto -->
            <p class="product-description">
                Producto de alta calidad, ideal para diversas aplicaciones.
            </p>
            <!-- Precios y descuentos -->
            <div class="product-pricing">
                <span class="product-original-price">$59.99</span> <!-- Precio original -->
                <span class="product-discounted-price">$49.99</span> <!-- Precio con descuento -->
            </div>
            <!-- Botón para agregar al carrito -->
            <button class="add-to-cart-btn">Agregar al carrito</button>
        </div>
    </div>

    <div class="product-card">
        <!-- Contenedor para la imagen del producto con la etiqueta de descuento -->
        <div class="product-image">
            <span class="discount-tag">20% OFF</span> <!-- Etiqueta de descuento -->
            <img id="product-img-8" src="../resources/imagenes_P/deporte3.jpeg" alt="Producto"> <!-- Imagen del producto -->
        </div>

        <!-- Puntos para cambiar la imagen -->
        <div class="image-points" id="points-8">
            <span class="point point1" data-image="../resources/imagenes_P/deporte3.jpeg"></span> <!-- Azul -->
            <span class="point point2" data-image="../resources/imagenes_P/mujer2.png"></span> <!-- Naranja -->
            <span class="point point3" data-image="../resources/imagenes_P/mujer3.png"></span> <!-- Verde -->
        </div>

        <!-- Información del producto -->
        <div class="product-info">
            <!-- Marca del producto -->
            <h3 class="product-brand">Marca XYZ</h3>
            <!-- Descripción del producto -->
            <p class="product-description">
                Producto de alta calidad, ideal para diversas aplicaciones.
            </p>
            <!-- Precios y descuentos -->
            <div class="product-pricing">
                <span class="product-original-price">$59.99</span> <!-- Precio original -->
                <span class="product-discounted-price">$49.99</span> <!-- Precio con descuento -->
            </div>
            <!-- Botón para agregar al carrito -->
            <button class="add-to-cart-btn">Agregar al carrito</button>
        </div>
    </div>

</div>
</div>


<div class="product-list-wrapper">
<h2 class="product-list-title">Productos Destacados</h2>
<div class="product-list">
    <div class="product-card">
        <!-- Contenedor para la imagen del producto con la etiqueta de descuento -->
        <div class="product-image">
            <span class="discount-tag">20% OFF</span> <!-- Etiqueta de descuento -->
            <img id="product-img-9" src="../resources/imagenes_P/deporte3.jpeg" alt="Producto"> <!-- Imagen del producto -->
        </div>

        <!-- Puntos para cambiar la imagen -->
        <div class="image-points" id="points-9">
            <span class="point point1" data-image="../resources/imagenes_P/deporte3.jpeg"></span> <!-- Azul -->
            <span class="point point2" data-image="../resources/imagenes_P/mujer1.png"></span> <!-- Naranja -->
            <span class="point point3" data-image="../resources/imagenes_P/mujer3.png"></span> <!-- Verde -->
        </div>

        <!-- Información del producto -->
        <div class="product-info">
            <!-- Marca del producto -->
            <h3 class="product-brand">Marca XYZ</h3>
            <!-- Descripción del producto -->
            <p class="product-description">
                Producto de alta calidad, ideal para diversas aplicaciones.
            </p>
            <!-- Precios y descuentos -->
            <div class="product-pricing">
                <span class="product-original-price">$59.99</span> <!-- Precio original -->
                <span class="product-discounted-price">$49.99</span> <!-- Precio con descuento -->
            </div>
            <!-- Botón para agregar al carrito -->
            <button class="add-to-cart-btn">Agregar al carrito</button>
        </div>
    </div>

    <div class="product-card">
        <!-- Contenedor para la imagen del producto con la etiqueta de descuento -->
        <div class="product-image">
            <span class="discount-tag">20% OFF</span> <!-- Etiqueta de descuento -->
            <img id="product-img-10" src="../resources/imagenes_P/deporte3.jpeg" alt="Producto"> <!-- Imagen del producto -->
        </div>

        <!-- Puntos para cambiar la imagen -->
        <div class="image-points" id="points-10">
            <span class="point point1" data-image="../resources/imagenes_P/deporte3.jpeg"></span> <!-- Azul -->
            <span class="point point2" data-image="../resources/imagenes_P/mujer2.png"></span> <!-- Naranja -->
            <span class="point point3" data-image="../resources/imagenes_P/mujer3.png"></span> <!-- Verde -->
        </div>

        <!-- Información del producto -->
        <div class="product-info">
            <!-- Marca del producto -->
            <h3 class="product-brand">Marca XYZ</h3>
            <!-- Descripción del producto -->
            <p class="product-description">
                Producto de alta calidad, ideal para diversas aplicaciones.
            </p>
            <!-- Precios y descuentos -->
            <div class="product-pricing">
                <span class="product-original-price">$59.99</span> <!-- Precio original -->
                <span class="product-discounted-price">$49.99</span> <!-- Precio con descuento -->
            </div>
            <!-- Botón para agregar al carrito -->
            <button class="add-to-cart-btn">Agregar al carrito</button>
        </div>
    </div>

    <div class="product-card">
        <!-- Contenedor para la imagen del producto con la etiqueta de descuento -->
        <div class="product-image">
            <span class="discount-tag">20% OFF</span> <!-- Etiqueta de descuento -->
            <img id="product-img-11" src="../resources/imagenes_P/deporte3.jpeg" alt="Producto"> <!-- Imagen del producto -->
        </div>

        <!-- Puntos para cambiar la imagen -->
        <div class="image-points" id="points-11">
            <span class="point point1" data-image="../resources/imagenes_P/deporte3.jpeg"></span> <!-- Azul -->
            <span class="point point2" data-image="../resources/imagenes_P/mujer2.png"></span> <!-- Naranja -->
            <span class="point point3" data-image="../resources/imagenes_P/mujer3.png"></span> <!-- Verde -->
        </div>

        <!-- Información del producto -->
        <div class="product-info">
            <!-- Marca del producto -->
            <h3 class="product-brand">Marca XYZ</h3>
            <!-- Descripción del producto -->
            <p class="product-description">
                Producto de alta calidad, ideal para diversas aplicaciones.
            </p>
            <!-- Precios y descuentos -->
            <div class="product-pricing">
                <span class="product-original-price">$59.99</span> <!-- Precio original -->
                <span class="product-discounted-price">$49.99</span> <!-- Precio con descuento -->
            </div>
            <!-- Botón para agregar al carrito -->
            <button class="add-to-cart-btn">Agregar al carrito</button>
        </div>
    </div>

    <div class="product-card">
        <!-- Contenedor para la imagen del producto con la etiqueta de descuento -->
        <div class="product-image">
            <span class="discount-tag">20% OFF</span> <!-- Etiqueta de descuento -->
            <img id="product-img-12" src="../resources/imagenes_P/deporte3.jpeg" alt="Producto"> <!-- Imagen del producto -->
        </div>

        <!-- Puntos para cambiar la imagen -->
        <div class="image-points" id="points-12">
            <span class="point point1" data-image="../resources/imagenes_P/deporte3.jpeg"></span> <!-- Azul -->
            <span class="point point2" data-image="../resources/imagenes_P/mujer2.png"></span> <!-- Naranja -->
            <span class="point point3" data-image="../resources/imagenes_P/mujer3.png"></span> <!-- Verde -->
        </div>

        <!-- Información del producto -->
        <div class="product-info">
            <!-- Marca del producto -->
            <h3 class="product-brand">Marca XYZ</h3>
            <!-- Descripción del producto -->
            <p class="product-description">
                Producto de alta calidad, ideal para diversas aplicaciones.
            </p>
            <!-- Precios y descuentos -->
            <div class="product-pricing">
                <span class="product-original-price">$59.99</span> <!-- Precio original -->
                <span class="product-discounted-price">$49.99</span> <!-- Precio con descuento -->
            </div>
            <!-- Botón para agregar al carrito -->
            <button class="add-to-cart-btn">Agregar al carrito</button>
        </div>
    </div>

</div>
</div>    


<div class="product-list-wrapper">
<h2 class="product-list-title">Productos Destacados</h2>
<div class="product-list">
    <div class="product-card">
        <!-- Contenedor para la imagen del producto con la etiqueta de descuento -->
        <div class="product-image">
            <span class="discount-tag">20% OFF</span> <!-- Etiqueta de descuento -->
            <img id="product-img-13" src="../resources/imagenes_P/deporte3.jpeg" alt="Producto"> <!-- Imagen del producto -->
        </div>

        <!-- Puntos para cambiar la imagen -->
        <div class="image-points" id="points-13">
            <span class="point point1" data-image="../resources/imagenes_P/deporte3.jpeg"></span> <!-- Azul -->
            <span class="point point2" data-image="../resources/imagenes_P/mujer1.png"></span> <!-- Naranja -->
            <span class="point point3" data-image="../resources/imagenes_P/mujer3.png"></span> <!-- Verde -->
        </div>

        <!-- Información del producto -->
        <div class="product-info">
            <!-- Marca del producto -->
            <h3 class="product-brand">Marca XYZ</h3>
            <!-- Descripción del producto -->
            <p class="product-description">
                Producto de alta calidad, ideal para diversas aplicaciones.
            </p>
            <!-- Precios y descuentos -->
            <div class="product-pricing">
                <span class="product-original-price">$59.99</span> <!-- Precio original -->
                <span class="product-discounted-price">$49.99</span> <!-- Precio con descuento -->
            </div>
            <!-- Botón para agregar al carrito -->
            <button class="add-to-cart-btn">Agregar al carrito</button>
        </div>
    </div>

    <div class="product-card">
        <!-- Contenedor para la imagen del producto con la etiqueta de descuento -->
        <div class="product-image">
            <span class="discount-tag">20% OFF</span> <!-- Etiqueta de descuento -->
            <img id="product-img-14" src="../resources/imagenes_P/deporte3.jpeg" alt="Producto"> <!-- Imagen del producto -->
        </div>

        <!-- Puntos para cambiar la imagen -->
        <div class="image-points" id="points-14">
            <span class="point point1" data-image="../resources/imagenes_P/deporte3.jpeg"></span> <!-- Azul -->
            <span class="point point2" data-image="../resources/imagenes_P/mujer2.png"></span> <!-- Naranja -->
            <span class="point point3" data-image="../resources/imagenes_P/mujer3.png"></span> <!-- Verde -->
        </div>

        <!-- Información del producto -->
        <div class="product-info">
            <!-- Marca del producto -->
            <h3 class="product-brand">Marca XYZ</h3>
            <!-- Descripción del producto -->
            <p class="product-description">
                Producto de alta calidad, ideal para diversas aplicaciones.
            </p>
            <!-- Precios y descuentos -->
            <div class="product-pricing">
                <span class="product-original-price">$59.99</span> <!-- Precio original -->
                <span class="product-discounted-price">$49.99</span> <!-- Precio con descuento -->
            </div>
            <!-- Botón para agregar al carrito -->
            <button class="add-to-cart-btn">Agregar al carrito</button>
        </div>
    </div>

    <div class="product-card">
        <!-- Contenedor para la imagen del producto con la etiqueta de descuento -->
        <div class="product-image">
            <span class="discount-tag">20% OFF</span> <!-- Etiqueta de descuento -->
            <img id="product-img-15" src="../resources/imagenes_P/deporte3.jpeg" alt="Producto"> <!-- Imagen del producto -->
        </div>

        <!-- Puntos para cambiar la imagen -->
        <div class="image-points" id="points-15">
            <span class="point point1" data-image="../resources/imagenes_P/deporte3.jpeg"></span> <!-- Azul -->
            <span class="point point2" data-image="../resources/imagenes_P/mujer2.png"></span> <!-- Naranja -->
            <span class="point point3" data-image="../resources/imagenes_P/mujer3.png"></span> <!-- Verde -->
        </div>

        <!-- Información del producto -->
        <div class="product-info">
            <!-- Marca del producto -->
            <h3 class="product-brand">Marca XYZ</h3>
            <!-- Descripción del producto -->
            <p class="product-description">
                Producto de alta calidad, ideal para diversas aplicaciones.
            </p>
            <!-- Precios y descuentos -->
            <div class="product-pricing">
                <span class="product-original-price">$59.99</span> <!-- Precio original -->
                <span class="product-discounted-price">$49.99</span> <!-- Precio con descuento -->
            </div>
            <!-- Botón para agregar al carrito -->
            <button class="add-to-cart-btn">Agregar al carrito</button>
        </div>
    </div>

    <div class="product-card">
        <!-- Contenedor para la imagen del producto con la etiqueta de descuento -->
        <div class="product-image">
            <span class="discount-tag">20% OFF</span> <!-- Etiqueta de descuento -->
            <img id="product-img-16" src="../resources/imagenes_P/deporte3.jpeg" alt="Producto"> <!-- Imagen del producto -->
        </div>

        <!-- Puntos para cambiar la imagen -->
        <div class="image-points" id="points-16">
            <span class="point point1" data-image="../resources/imagenes_P/deporte3.jpeg"></span> <!-- Azul -->
            <span class="point point2" data-image="../resources/imagenes_P/mujer2.png"></span> <!-- Naranja -->
            <span class="point point3" data-image="../resources/imagenes_P/mujer3.png"></span> <!-- Verde -->
        </div>

        <!-- Información del producto -->
        <div class="product-info">
            <!-- Marca del producto -->
            <h3 class="product-brand">Marca XYZ</h3>
            <!-- Descripción del producto -->
            <p class="product-description">
                Producto de alta calidad, ideal para diversas aplicaciones.
            </p>
            <!-- Precios y descuentos -->
            <div class="product-pricing">
                <span class="product-original-price">$59.99</span> <!-- Precio original -->
                <span class="product-discounted-price">$49.99</span> <!-- Precio con descuento -->
            </div>
            <!-- Botón para agregar al carrito -->
            <button class="add-to-cart-btn">Agregar al carrito</button>
        </div>
    </div>

</div>
</div> 

    <!-- Botón flotante de WhatsApp -->
    <a href="https://wa.me/51960724439" target="_blank" title="Contáctanos por WhatsApp" class="whatsapp-float">
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" style="width: 50px; height: 50px;">
    </a>

    <script src="../resources/js/producto.js"></script> 
</body>
</html>