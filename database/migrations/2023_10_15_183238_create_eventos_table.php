<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administrador', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_user');
            $table->string('password');
            $table->string('correo');
            $table->timestamps();
        });

        Schema::create('trabajo', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('admin_id'); // Clave foránea
        });

        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('descripcion');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->string('tipo');
            $table->boolean('editable');
            $table->string('correo_referencia');
            $table->string('cel_referencia');
            $table->unsignedBigInteger('id_trabajo'); // Clave foránea
            $table->timestamps();
        });

        // Establecer las relaciones
        Schema::table('eventos', function (Blueprint $table) {
            $table->foreign('id_trabajo')->references('id')->on('trabajo');
            $table->foreign('admin_id')->references('id')->on('administrador');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eventos');
        Schema::dropIfExists('administrador');
        Schema::dropIfExists('trabajo');
    }  
}
