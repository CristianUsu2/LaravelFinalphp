<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntradaProducto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('_entrada__producto');

        Schema::create('_entrada__producto', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Id_entrada');
            $table->unsignedBigInteger('Id_producto');
            $table->foreign('Id_entrada')->references('id')->on('entrada');
            $table->foreign('Id_producto')->references('id')->on('productos');
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
        Schema::dropIfExists('_entrada__producto');
    }
}
