<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('Estado',50);
            $table->integer('Cantidad');

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
        Schema::dropIfExists('orders');
    }
}
