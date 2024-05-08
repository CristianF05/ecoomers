<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Para autenticación
use Illuminate\Support\Facades\Hash; // Para verificar contraseñas hasheadas
use Illuminate\Support\Facades\Validator; // Para validación

class LoginController extends Controller
{
    public function index()
    {
        return view('Login'); // Muestra la vista de login
    }

    public function store(Request $request)
    {
        // Validar la solicitud
        $validator = Validator::make($request->all(), [
            'email' => 'required|email', // Correo electrónico obligatorio
            'password' => 'required|min:8', // Contraseña mínima de 8 caracteres
        ]);

        if ($validator->fails()) {
            // Si la validación falla, regresar con errores y datos previos
            return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
        }

        // Intentar iniciar sesión
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Si el login es exitoso, redirigir a la página segura (como un dashboard)
            return redirect()->route('http://localhost/ecommers/public'); // Ajusta la ruta según tu aplicación
        }

        // Si el login falla, regresar con un mensaje de error
        return redirect()->back()
                ->withErrors(['login_error' => 'Correo o contraseña incorrectos.'])
                ->withInput();
    }

    public function logout()
    {
        Auth::logout(); // Cerrar sesión
        return redirect()->route('http://localhost/ecommers/public/Login'); // Redirigir a la página de login
    }
}
