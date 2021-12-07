<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatalogosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catalogos', function (Blueprint $table) {
            $table->id('idCatalogo');
            $table->string('categoriaCatalogo');

            $table->unsignedBigInteger('empleadoFK')->unique()->nullable();

            $table->foreign('empleadoFK')
                    ->references('idEmpleado')
                    ->on('empleados')
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
        Schema::dropIfExists('catalogos');
    }
}
