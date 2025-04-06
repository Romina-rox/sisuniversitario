<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * QUE CORRA LOS DATOS QUE SE DEBEN DE MIGRAR
     */
    public function up(): void
    {
        Schema::create('carreras', function (Blueprint $table) {
            $table->id();

            $table-> string('nombre');

            $table->timestamps();
        });
    }

    /**
     * DE DONDE SE MIGRA LOS DATOS 
     */
    public function down(): void
    {
        Schema::dropIfExists('carreras');
    }
};
