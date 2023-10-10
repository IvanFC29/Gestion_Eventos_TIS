<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventosTable extends Migration
{
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('descripcion');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->string('tipo');
            $table->boolean('estado');
            $table->unsignedBigInteger('admin_id'); // Clave foránea
            $table->timestamps();
        });

        Schema::create('afiche', function (Blueprint $table) {
            $table->id();
            $table->string('imagen');
            $table->unsignedBigInteger('evento_id'); // Clave foránea
            $table->timestamps();
        });

        Schema::create('administrador', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->timestamps();
        });

        // Establecer las relaciones
        Schema::table('eventos', function (Blueprint $table) {
            $table->foreign('admin_id')->references('id')->on('administrador');
        });

        Schema::table('afiche', function (Blueprint $table) {
            $table->foreign('evento_id')->references('id')->on('eventos');
        });
    }

    public function down()
    {
        Schema::dropIfExists('eventos');
        Schema::dropIfExists('afiche');
        Schema::dropIfExists('administrador');
    }
}
