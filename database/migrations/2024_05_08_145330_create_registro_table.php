<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('registro', function (Blueprint $table) {
            $table->id(); // Identificador único
            $table->string('nombre', 100); // Nombre del usuario
            $table->string('email')->unique(); // Correo electrónico (único)
            $table->string('password'); // Hash de la contraseña
            $table->timestamp('email_verified_at')->nullable(); // Fecha de verificación de correo
            $table->rememberToken(); // Token para recordar sesión
            $table->timestamps(); // Crea columnas de timestamps para created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registro');
    }
};
