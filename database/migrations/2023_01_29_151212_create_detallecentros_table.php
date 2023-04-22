<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetallecentrosTable extends Migration
{
    
    public function up()
    {
        Schema::create('detallecentros', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',250);
            $table->string('direccion',300);
            $table->string('telefono');
            $table->string('horario_atencion');
            $table->string('mapa',300);
            // la relacion debe ser aqui

            $table->foreignId('id_redcentros')->constrained('redcentros')->cascadeOnUpdate()->cascadeOnDelete();
            
            $table->timestamps();
        });
    }

  
    public function down()
    {
        Schema::dropIfExists('detallecentros');
    }
}
