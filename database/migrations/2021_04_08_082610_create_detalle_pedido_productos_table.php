<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetallePedidoProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('detalle_pedido_productos');
        Schema::create('detalle_pedido_productos', function (Blueprint $table) {
            $table->id('Id_Detalle');
            $table->integer('cantidad');
            $table->float('Total');
            $table->float('Sub_Total');
            $table->integer('EstadoD');
            $table->unsignedBigInteger('id_pedido')->unique();
            $table->foreign('id_pedido')->references('Id_Pedido')->on('pedido');
            $table->unsignedBigInteger('id_producto')->default(1);
            $table->foreign('id_producto')->references('id')->on('productos');
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
        Schema::dropIfExists('detalle_pedido_productos');
    }
}
