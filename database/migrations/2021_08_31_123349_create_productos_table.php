<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id('idProducto');
            $table->string('nombreProducto');
            $table->string('descripcionProducto');
            $table->float('costoProducto');

            //Conexion con la tabla catalogo
            $table->unsignedBigInteger('idCatalogoFK')->nullable();

            $table->foreign('idCatalogoFK')
                    ->references('idCatalogo')
                    ->on('catalogos')
                    ->onDelete('set null')
                    ->onUpdate('cascade');


            //Conexion con la tabla imagen
            $table->unsignedBigInteger('idImagenFK')->nullable();

            $table->foreign('idImagenFK')
                    ->references('idImagen')
                    ->on('imagens')
                    ->onDelete('set null')
                    ->onUpdate('cascade');


            //Conexion con la tabla colorProducto
            $table->unsignedBigInteger('idColorProductoFK')->nullable();

            $table->foreign('idColorProductoFK')->references('idColorProducto')->on('colorproductos')->onDelete('cascade');


            //Conexion con la tabla tipoProducto
            $table->unsignedBigInteger('idTipoProductoFK')->nullable();

            $table->foreign('idTipoProductoFK')->references('idTipoProducto')->on('tipoproductos')->onDelete('set null');

            //Conexion con la tabla material
            $table->unsignedBigInteger('idMaterialFK')->nullable();

            $table->foreign('idMaterialFK')->references('idMaterial')->on('materials')->onDelete('set null')->onUpdate('cascade');



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
        Schema::dropIfExists('productos');
    }
}

