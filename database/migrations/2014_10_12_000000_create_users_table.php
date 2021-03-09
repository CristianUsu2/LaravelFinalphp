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
            $table->id('Id_Usuarios');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('identificacion')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password',255);
            $table->boolean('estado')->default(true);
            $table->unsignedBigInteger('id_rol')->default(1);
            $table->foreign('id_rol')->references('Id_Usuarios')->on('users');
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
