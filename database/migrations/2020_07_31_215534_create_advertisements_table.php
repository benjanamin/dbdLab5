<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvertisementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertisements', function (Blueprint $table) {
            $table->id();
            $table->string('Titulo',50);
            $table->integer('Cantidad');
            $table->string('Descripcion',255);
            $table->integer('PrecioUnitario');

            $table->unsignedBigInteger('IDUsuario');
            $table->unsignedBigInteger('IDCategoria');
            
            $table->foreign('IDUsuario')->references('id')->on('users')->onDelete("cascade")->onUpdate("cascade");
            $table->foreign('IDCategoria')->references('id')->on('categories')->onDelete("cascade")->onUpdate("cascade");

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
        Schema::dropIfExists('advertisements');
    }
}
