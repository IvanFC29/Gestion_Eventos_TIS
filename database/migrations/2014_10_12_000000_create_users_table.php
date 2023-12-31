<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('apellidoP')->nullable();
            $table->string('apellidoM')->nullable();
            $table->string('email')->unique();
            $table->string('universidad')->nullable();
            $table->string('telefono')->nullable();
            $table->date('fechaN')->nullable();
            $table->string('direccion')->nullable();
            $table->string('carnet')->nullable();
            $table->string('rol')->nullable();

            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
        Schema::dropIfExists('users');
    }
}
