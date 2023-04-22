<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCapsulasTable extends Migration
{
 
    public function up()
    {
        Schema::create('capsulas', function (Blueprint $table) {
            $table->id();
     
            $table->string('titulo',200);
            $table->binary('foto')->nullable();
            $table->string('descripcion',600);
            $table->string('mas_detalles',2000);
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
        Schema::dropIfExists('capsulas');
    }
}
