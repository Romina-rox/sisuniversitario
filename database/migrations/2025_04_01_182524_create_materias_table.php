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
        Schema::create('materias', function (Blueprint $table) {
            $table->id();
        
            $table->unsignedBigInteger('carrera_id'); 

            $table->foreign('carrera_id') // Método correcto: foreign
                  ->references('id') // Referencia a la columna 'id' de la tabla 'carreras'
                  ->on('carreras') // En la tabla 'carreras'
                  ->onDelete('cascade'); // Si se elimina una carrera, se eliminan las materias relacionadas
        
            $table->string('nombre');
            $table->string('codigo');
        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materias');
    }
};
