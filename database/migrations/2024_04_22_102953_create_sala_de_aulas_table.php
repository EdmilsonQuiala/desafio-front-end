<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalaDeAulasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salas_de_aulas', function (Blueprint $table) {
            $table->id();
            $table->string('designacao');
            $table->integer('funcionais');
            $table->integer('nao_funcionais');
            $table->integer('numero_total');
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
        Schema::dropIfExists('salas_de_aulas');
    }
}
