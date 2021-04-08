<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedido', function (Blueprint $table) {
            $table->id('Id_Pedido');
            $table->string('Direccion',45);
            $table->date('Fecha');
            $table->unsignedBigInteger('id_estado')->default(1);
            $table->foreign('id_estado')->references('Id_Estado')->on('estado_pedido');
            $table->unsignedBigInteger('id_usuario')->default(1);
            $table->foreign('id_usuario')->references('Id_Usuarios')->on('users');
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
        Schema::dropIfExists('pedido');
    }
}
