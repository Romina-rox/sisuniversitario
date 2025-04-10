<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * CORREN LAS MIGRACIONES CON EL php artisan migrate
     */
    public function up(): void
    {
        Schema::create('gestions', function (Blueprint $table) {
            $table->id();

            $table-> string('nombre');
            
            $table->timestamps();
        });
    }

    /**
     * DE DONDE MIGRA
     */
    public function down(): void
    {
        Schema::dropIfExists('gestions');
    }
};
