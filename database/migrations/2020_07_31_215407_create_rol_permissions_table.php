<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolPermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rol_permissions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('IDROL');
            $table->unsignedBigInteger('IDPERMISSION');
            $table->foreign('IDROL')->references('id')->on('rols')->onDelete("cascade")->onUpdate("cascade");
            $table->foreign('IDPERMISSION')->references('id')->on('permissions')->onDelete("cascade")->onUpdate("cascade");
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
        Schema::dropIfExists('rol_permissions');
    }
}
