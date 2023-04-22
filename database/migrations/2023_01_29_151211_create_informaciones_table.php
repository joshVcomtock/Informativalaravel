<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformacionesTable extends Migration
{
 
    public function up()
    {
        Schema::create('informaciones', function (Blueprint $table) {
            $table->id(); 
            $table->string('nombre',250);
            $table->binary('foto')->nullable();
            $table->string('descripcion',800);
            $table->string('mision',1000);
            $table->binary('foto_m')->nullable();
            $table->string('vision',1000);
            $table->binary('foto_v')->nullable();
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
        Schema::dropIfExists('informaciones');
    }
}
