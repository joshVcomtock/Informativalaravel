<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateCentrosTable extends Migration
{
    public function up()
    {
        Schema::create('centros', function (Blueprint $table) {

            $table->id();
            $table->string('centro_diagnostico');
            $table->string('sede',100);
            $table->string('centro');
            $table->binary('foto')->nullable();
            $table->integer('telefono');
            $table->string('dirreccion',200);
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
        Schema::dropIfExists('centros');
    }
}
