<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../resources/css/registrar.css">
</head>
<body>

<div class="register-container">
        <div class="header">
            <!-- Enlace para volver a la página anterior -->
            <a href="http://localhost/ecommers/public" class="back-link"> 
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0-1A6 6 0 1 1 8 2a6 6 0 0 1 0 12zm3.5-6.5a.5.5 0 0 0 0-1H5.707l1.647-1.646a.5.5 0 1 0-.708-.708l-2.5 2.5a.5.5 0 0 0 0 .708l2.5 2.5a.5.5 0 0 0 .708-.708L5.707 7.5H11.5z"/>
                </svg>
            </a>
            <h2>Crear Cuenta</h2>
        </div>

        <form action="/register" method="POST"> <!-- Cambia la acción según tu servidor -->
            <div class="form-group">
                <label for="name">Nombre:</label>
                <input type="text" id="name" name="name" required placeholder="Tu nombre completo">
            </div>
            <div class="form-group">
                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" required placeholder="Tu correo electrónico">
            </div>
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required placeholder="Tu contraseña">
            </div>
            <div class="form-group">
                <label for="confirm-password">Confirmar Contraseña:</label>
                <input type="password" id="confirm-password" name="confirm-password" required placeholder="Repite tu contraseña">
            </div>
            <button type="submit" class="register-btn">Crear Cuenta</button> <!-- Botón para crear cuenta -->
        </form>

        <div class="additional-links">
            <a href="http://localhost/ecommers/public/Login">¿Ya tienes cuenta? Iniciar Sesión</a> <!-- Enlace para iniciar sesión -->
        </div>
        <div class="additional-links">
            <a href="#forgot-password">¿Olvidaste tu contraseña?</a> <!-- Enlace para recuperar contraseña -->
        </div>
    </div>

</body>
</html>