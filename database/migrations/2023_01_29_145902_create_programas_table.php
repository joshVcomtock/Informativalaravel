<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramasTable extends Migration
{
  
    public function up()
    {
        Schema::create('programas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',200);
            $table->binary('foto')->nullable();
            $table->string('contenido_a',800);
            $table->string('contenido_b',800);
            $table->string('titulo',200);
            $table->string('titulo_desc',200);
            $table->string('compemento',800);
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
        Schema::dropIfExists('programas');
    }
}
