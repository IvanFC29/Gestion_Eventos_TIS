<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipanteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participante', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellidoP');
            $table->string('apellidoM');
            $table->string('email')->unique();
            $table->string('carnet')->unique();
            $table->string('universidad');
            $table->string('celular');
            $table->date('fecha_nacimiento');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('participante');
    }
}
