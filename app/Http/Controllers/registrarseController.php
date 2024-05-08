<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registro; // Modelo para la tabla 'registro'
use Illuminate\Support\Facades\Hash; // Para cifrar la contraseña
use Illuminate\Support\Facades\Validator; // Para validar datos

class registrarseController extends Controller
{
    public function index()

    {
  
      return view ('Registrarte');
  
    }

    public function store(Request $request)
    {
        // Validar la solicitud
        $validator = Validator::make($request->all(), [
            'nombre' => 'required|max:100',
            'email' => 'required|email|unique:registro,email', // Regla para verificar que el correo sea único
            'password' => 'required|min:8',
        ]);

        // Si falla la validación, devolver errores
        if ($validator->fails()) {
            return redirect()->back() // Regresa a la vista anterior
                    ->withErrors($validator) // Con los errores
                    ->withInput(); // Con los datos previos para que no se pierdan
        }

        // Guardar el nuevo registro
        $registro = new Registro();
        $registro->nombre = $request->nombre;
        $registro->email = $request->email;
        $registro->password = Hash::make($request->password);
        $registro->save();

        // Redireccionar a una página de éxito o a la página de inicio de sesión
        return redirect()->route('http://localhost/ecommers/public/login')->with('success', 'Cuenta creada con éxito');
    }
}
