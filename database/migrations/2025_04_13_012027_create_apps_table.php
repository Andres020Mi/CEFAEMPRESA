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
        Schema::create('apps', function (Blueprint $table) {
            // Clave primaria: Identificador único de la aplicación
            $table->id()->comment('Identificador único de la aplicación');

            // Título: Nombre de la aplicación
            $table->string('title')->comment('Nombre oficial de la aplicación, usado para identificarla en la interfaz de CEFAEMPRESA (por ejemplo, "Gestión de Producción")');

            // Descripción: Detalle de la funcionalidad de la aplicación
            $table->string('description')->comment('Descripción breve de la funcionalidad y propósito de la aplicación, mostrada en tarjetas o menús (por ejemplo, "Administra cultivos y procesos productivos")');

            // Clase del ícono: Clase de Font Awesome para el ícono
            $table->string('icon_class')->comment('Clase de Font Awesome que representa el ícono de la aplicación (por ejemplo, "fa-solid fa-tractor" para producción agrícola)');
// URL: Ruta para acceder a la aplicación
$table->string('url')->comment('URL o ruta interna para acceder a la aplicación (por ejemplo, "/produccion" o "https://app.externa.com")');
            // Marcas de tiempo: Creación y actualización del registro
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apps');
    }
};
