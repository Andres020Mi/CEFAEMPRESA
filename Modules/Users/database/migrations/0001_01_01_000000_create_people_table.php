<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   /**
     * Ejecuta la migración.
     * 
     * Crea la tabla 'people' para almacenar información personal de individuos asociados al sistema,
     * como estudiantes, empleados u otros interesados. La tabla incluye datos personales detallados,
     * información de contacto, afiliaciones y otros atributos relevantes.
     */
    public function up(): void
    {
        Schema::create('people', function (Blueprint $table) {
           // Clave primaria: Identificador único para cada persona
           $table->id()->comment('Identificador único de la persona');

           // Tipo de documento: Define el tipo de documento de identificación
           $table->enum('document_type', [
               'Cédula de ciudadanía',
               'Tarjeta de identidad',
               'Cédula de extranjería',
               'Pasaporte',
               'Documento nacional de identidad',
               'Registro civil'
           ])->nullable()->comment('Tipo de documento de identificación (por ejemplo, Cédula de ciudadanía, Pasaporte)');

           // Número de documento: Número único asociado al documento de identidad
           $table->unsignedBigInteger('document_number')->nullable()->unique()->comment('Número único del documento de identificación');

           // Fecha de expedición: Fecha en que se expidió el documento
           $table->date('date_of_issue')->nullable()->comment('Fecha en la que se expidió el documento de identificación');

           // Nombre: Primer nombre de la persona
           $table->string('first_name')->nullable()->comment('Primer nombre de la persona');
             // Nombre: Primer nombre de la persona
             $table->string('second_first_name')->nullable()->comment('segundo nombre de la persona');

           // Primer apellido: Apellido principal de la persona
           $table->string('first_last_name')->nullable()->comment('Primer apellido de la persona');

           // Segundo apellido: Segundo apellido de la persona (opcional)
           $table->string('second_last_name')->nullable()->comment('Segundo apellido de la persona, si aplica');

           // Fecha de nacimiento: Fecha de nacimiento de la persona
           $table->date('date_of_birth')->nullable()->comment('Fecha de nacimiento de la persona');

    
           // Género: Género de la persona
           $table->enum('gender', [
               'No registra',
               'Masculino',
               'Femenino'
           ])->nullable()->comment('Género de la persona (Masculino, Femenino o "No registra" si no se especifica)');


           // Dirección: Dirección de residencia de la persona
           $table->string('address')->nullable()->comment('Dirección de residencia de la persona');

           // Teléfonos: Hasta tres números de contacto
           $table->unsignedBigInteger('telephone1')->nullable()->comment('Número de teléfono principal de contacto');
           $table->unsignedBigInteger('telephone2')->nullable()->comment('Número de teléfono secundario de contacto');
           $table->unsignedBigInteger('telephone3')->nullable()->comment('Número de teléfono terciario de contacto');

           // Correos electrónicos: Correos personales e institucionales
           $table->string('personal_email')->nullable()->comment('Correo electrónico personal de la persona');
           $table->string('misena_email')->nullable()->comment('Correo institucional proporcionado por Misena, si aplica');
           $table->string('sena_email')->nullable()->comment('Correo institucional proporcionado por SENA, si aplica');

           // Avatar: Ruta de la imagen de perfil
           $table->string('avatar')->nullable()->comment('Ruta o URL de la imagen de perfil de la persona');

           // Código biométrico: Código para identificación biométrica
           $table->text('biometric_code')->nullable()->comment('Código de identificación biométrica (por ejemplo, datos de huellas dactilares o reconocimiento facial)');

  // Fotos del documento de identidad
$table->string('document_front_photo')->nullable()->comment('Foto del frente del documento de identidad');
$table->string('document_back_photo')->nullable()->comment('Foto del reverso del documento de identidad');

    
           // Marcas de tiempo: Para auditoría
           $table->timestamps();

           // Nota: La tabla usa eliminación lógica para mantener la integridad de los datos y permitir la recuperación de registros eliminados
       });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('people');
    }
};
