<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="../resources/css/login.css">
</head>
<body>
   
<div class="login-container">
        <div class="header">
            <a href="http://localhost/ecommers/public" class="back-link"> <!-- Icono de flecha para volver -->
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0-1A6 6 0 1 1 8 2a6 6 0 0 1 0 12zm3.5-6.5a.5.5 0 0 0 0-1H5.707l1.647-1.646a.5.5 0 1 0-.708-.708l-2.5 2.5a.5.5 0 0 0 0 .708l2.5 2.5a.5.5 0 0 0 .708-.708L5.707 7.5H11.5z"/>
                </svg>
            </a>
            <h2>Iniciar Sesión</h2> <!-- Título del formulario -->
        </div>

        <form action="/login" method="POST"> <!-- Cambia la acción según tu servidor -->
            <div class="form-group">
                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" required placeholder="Tu correo electrónico">
            </div>
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required placeholder="Tu contraseña">
            </div>
            <button type="submit" class="login-btn">Iniciar Sesión</button> <!-- Botón para iniciar sesión -->
        </form>

        <div class="additional-links">
            <a href="#forgot-password">¿Olvidaste tu contraseña?</a> <!-- Enlace para recuperar la contraseña -->
            <a href="http://localhost/ecommers/public/Registrarse">Crear una cuenta nueva</a> <!-- Enlace para crear una cuenta nueva -->
        </div>
    </div>

</body>
</html>