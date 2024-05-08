<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable; // Extender de Authenticatable
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Registro extends Authenticatable // Cambia a Authenticatable
{
    use HasFactory;

    protected $table = 'registro'; // Nombre de la tabla
    protected $fillable = ['nombre', 'email', 'password']; // Campos rellenables
}
