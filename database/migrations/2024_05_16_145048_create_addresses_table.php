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

            //Llave foranea 1° forma
           /* $table->unsignedBigInteger('user_id'); //nombre del modelo_nombre de la llave primaria
            $table->foreign('user_id')
            ->references('id')
            ->on('users');*/
            $table->timestamps();
            $table->foreignId('profile_id')->constrained(); //forma 2 para crear campo de llave foranea , recomendado si se usan convecciones
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
