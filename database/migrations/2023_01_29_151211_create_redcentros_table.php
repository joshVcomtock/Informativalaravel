<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRedcentrosTable extends Migration
{
    // una red puede tener varios centros 

    public function up()
    {
        Schema::create('redcentros', function (Blueprint $table) {
            $table->id(); 
            $table->string('red',200);
            
            // debe ser la relacion al contrario

            // $table->foreignId('id_detallecentros')->constrained('detallecentros')->cascadeOnUpdate()->cascadeOnDelete();

            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('redcentros');
    }
}
