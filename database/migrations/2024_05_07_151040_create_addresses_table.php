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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('Departamento');
            $table->string('Ciudad');
            $table->string('Distrito');
            $table->string('Calle');
            $table->timestamps();

            //Llave foranea
            $table->unsignedBigInteger('user_id'); //nombre del modelo_nombre de la llave primaria
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
