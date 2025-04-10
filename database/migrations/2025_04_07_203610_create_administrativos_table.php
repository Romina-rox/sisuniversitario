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
        Schema::create('administrativos', function (Blueprint $table) {
            $table->id();
        
            $table->unsignedBigInteger('usuario_id'); 

            $table->foreign('usuario_id') // Método correcto: foreign
                  ->references('id') // Referencia a la columna 'id' de la tabla 'carreras'
                  ->on('users') // En la tabla 'carreras'
                  ->onDelete('cascade'); // Si se elimina una carrera, se eliminan las materias relacionadas
        
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('ci')->unique();//unique por que es unico
            $table->date('fecha_nacimiento');
            $table->string('telefono');
            $table->string('direccion');
            $table->string('profesion');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('administrativos');
    }
};
