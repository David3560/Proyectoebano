<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosCotizadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos_cotizados', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("id_cotizacion")->nullable();
            $table->foreign("id_cotizacion")
                ->references("id")
                ->on("cotizacions")
                ->onDelete("cascade")
                ->onUpdate("cascade");
            $table->string("nombreProducto");
            $table->string("descripcionProducto");
            $table->string("costoProducto");

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
        Schema::dropIfExists('productos_cotizados');
    }
}
