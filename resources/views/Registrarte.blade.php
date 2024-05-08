<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="../resources/css/registrar.css">
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            @if($errors->any())
                let errorMessage = 'Errores:\n';
                @foreach ($errors->all() as $error)
                    errorMessage += '- {{ $error }}\n'; // Agregar cada error al mensaje
                @endforeach
                alert(errorMessage); // Mostrar el mensaje emergente con todos los errores
            @endif
        });
    </script>
</head>
<body>

<div class="register-container">
    <div class="header">
        <!-- Enlace para volver a la página anterior -->
        <a href="{{ url('/') }}" class="back-link" aria-label="Volver a la página principal">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0-1A6 6 0 1 1 8 2a6 6 0 0 1 0 12zm3.5-6.5a.5.5 0 0 0 0-1H5.707l1.647-1.646a .5.5 0 1 0-.708-.708l-2.5 2.5a .5.5 0 0 0 .708-.708L5.707 7.5H11.5z"/>
            </svg>
        </a>
        <h2>Crear Cuenta</h2> <!-- Título del formulario -->
    </div>

    <form action="{{ route('registrarse.store') }}" method="POST">
        @csrf <!-- Token CSRF para seguridad -->
        
        <!-- Campo para el nombre -->
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required placeholder="Tu nombre completo">
        </div>

        <!-- Campo para el correo electrónico -->
        <div class="form-group">
            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" required placeholder="Tu correo electrónico">
            @error('email')
            <span class="text-danger">{{ $message }}</span> <!-- Muestra el mensaje de error si el correo ya está registrado -->
            @enderror
        </div>

        <!-- Campo para la contraseña -->
        <div class="form-group">
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required placeholder="Tu contraseña">
        </div>

        <!-- Campo para confirmar la contraseña -->
        <div class="form-group">
            <label for="confirm-password">Confirmar Contraseña:</label>
            <input type="password" id="confirm-password" required placeholder="Repite tu contraseña">
        </div>

        <!-- Botón para enviar el formulario -->
        <button type="submit" class="register-btn">Registrar</button>
    </form>

    <!-- Enlaces adicionales para iniciar sesión y recuperar contraseña -->
    <div class="additional-links">
        <a href="{{ url('/login') }}">¿Ya tienes cuenta? Iniciar Sesión</a> <!-- Enlace para iniciar sesión -->
    <div class="additional-links">
        <a href="#forgot-password">¿Olvidaste tu contraseña?</a> <!-- Enlace para recuperar contraseña -->
    </div>
</div>

</body>
</html>
