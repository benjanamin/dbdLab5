<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('Estado',15);
            $table->integer('Monto');
            $table->integer('Cuotas');
            $table->unsignedBigInteger('IDFormaDePago');
            $table->unsignedBigInteger('IDOrden');
            $table->foreign('IDFormaDePago')->references('id')->on('payment_methods');
            $table->foreign('IDOrden')->references('id')->on('orders')->onDelete("cascade")->onUpdate("cascade");
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
        Schema::dropIfExists('transactions');
    }
}
