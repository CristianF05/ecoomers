<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\carritoController;
use  App\Http\Controllers\crearController;
use  App\Http\Controllers\hombreController;
use  App\Http\Controllers\loginController;
use  App\Http\Controllers\MetodosPController;
use  App\Http\Controllers\mujerController;
use  App\Http\Controllers\niñoController;
use  App\Http\Controllers\registrarseController;
use  App\Http\Controllers\ventaspController;
use  App\Http\Controllers\ZapatoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Carrito', [carritoController::class, 'index' ]);

Route::get('/Crear_A', [crearController::class, 'index' ]);

Route::get('/Rhombre', [hombreController::class, 'index' ]);

Route::get('/Login', [loginController::class, 'index' ]);

Route::get('/Metodos_pago', [MetodosPController::class, 'index' ]);

Route::get('/Rmujer', [mujerController::class, 'index' ]);

Route::get('/Rniños', [niñoController::class, 'index' ]);

Route::get('/Registrarse', [registrarseController::class, 'index' ]);

Route::get('/Ventas_P', [ventaspController::class, 'index' ]);

Route::get('/Zapatos', [ZapatoController::class, 'index' ]);
