<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="../resources/css/login.css"> <!-- Asegúrate de usar asset() para rutas -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            @if($errors->has('login_error'))
                alert("{{ $errors->first('login_error') }}"); // Muestra mensaje emergente si el login falla
            @endif
        });
    </script>
</head>
<body>
   
<div class="login-container">
    <div class="header">
        <a href="{{ url('/') }}" class="back-link" aria-label="Volver a la página principal"> <!-- Correcto para Laravel -->
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 15A7 7 1 0 0 0 8 1a7 7 a.5.5 0 1 0 .708-.708"/>
            </svg>
        </a>
        <h2>Iniciar Sesión</h2>
    </div>

    <form action="{{ route('login.store') }}" method="POST">
        @csrf <!-- Protección CSRF -->
        
        <div class="form-group">
            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" required placeholder="Tu correo electrónico">
            @error('email')
            <span class="text-danger">{{ $message }}</span> <!-- Muestra errores para el correo -->
            @enderror
        </div>
        
        <div class="form-group">
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required placeholder="Tu contraseña">
            @error('password')
            <span class="text-danger">{{ $message }}</span> <!-- Muestra errores para la contraseña -->
            @enderror
        </div>
        
        <button type="submit" class="login-btn">Iniciar Sesión</button>
    </form>

    <div class="additional-links">
        <a href="#forgot-password">¿Olvidaste tu contraseña?</a> <!-- Enlace para recuperar la contraseña -->
        <a href="{{ route('registrarse.index') }}">Crear una cuenta nueva</a> <!-- Enlace para crear una cuenta nueva -->
    </div>
</div>

</body>
</html>
