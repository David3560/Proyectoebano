<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id('idEmpleado');
            $table->string('nombreEmpleado')->unique();
            $table->bigInteger('documentoEmpleado')->unique();
            $table->date('fechaNacimiento');
            $table->bigInteger('telefonoEmpleado')->unique();

            $table->unsignedBigInteger('usuarioFK')->nullable()->unique();

            $table->foreign('usuarioFK')
                    ->references('id')
                    ->on('users')
                    ->onDelete('set null')
                    ->onUpdate('cascade');

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
        Schema::dropIfExists('empleados');
    }
}
