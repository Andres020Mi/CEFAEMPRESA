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
        Schema::create('keywords', function (Blueprint $table) {
            $table->id();
            //  nombre de la palabra clave
                $table->string('keyword')->unique()->comment('Nombre de la palabra clave');


                // Palabra clave
    $table->string('word')->unique()->comment('Palabra clave');

    // Descripción de la palabra clave
    $table->text('description')->nullable()->comment('Descripción de la palabra clave');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keywords');
    }
};
