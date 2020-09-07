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
            $table->id();
            $table->string('RUT')->unique();
            $table->string('nombre',50);
            $table->string('email',50)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password',100);
            $table->string('direccion',100);
            $table->string('telefono',25);
            $table->date('fechaDeNacimiento');
            $table->unsignedBigInteger('IDROL');
            $table->foreign('IDROL')->references('id')->on('rols')->onDelete("cascade")->onUpdate("cascade");
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
