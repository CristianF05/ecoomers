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
        Schema::create('productos', function (Blueprint $table) {
            $table->id(); // ID único para el producto
            $table->string('nombre'); // Nombre del producto
            $table->text('descripcion'); // Descripción del producto
            $table->decimal('precio', 8, 2); // Precio del producto
            $table->string('categoria'); // Categoría (mujer, hombre, niños, zapatos, etc.)
            $table->string('tipo_prenda'); // Tipo de prenda (polo, chaleco, pantalón, etc.)
            $table->string('imagen')->nullable(); // Ruta de la imagen del producto
            $table->integer('stock')->default(0); // Cantidad en inventario
            $table->timestamps(); // Timestamps para created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos'); // Borra la tabla de productos
    }
};
