<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateValorationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('valorations', function (Blueprint $table) {
            $table->id();
            $table->string('Titulo',80);
            $table->integer('Estrellas');
            $table->string('Comentario',255);
            //llaves foraneas
            $table->unsignedBigInteger('RUTUsuario');
            $table->unsignedBigInteger('IDAnuncio');
            $table->foreign('RUTUsuario')->references('RUT')->on('users')->onDelete("cascade")->onUpdate("cascade");
            $table->foreign('IDAnuncio')->references('id')->on('advertisements')->onDelete("cascade")->onUpdate("cascade");

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
        Schema::dropIfExists('valorations');
    }
}
