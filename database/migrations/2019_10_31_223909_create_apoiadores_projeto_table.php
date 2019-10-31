<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApoiadoresProjetoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apoiadores_projeto', function(Blueprint $table){
            $table->increments('id_doacao');
            $table->integer('id_projeto');
            $table->integer('id_apoiador');
            $table->decimal('valor_doado', 7,2);
            $table->timestamps('criado_em');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('apoiadores_projeto');
    }
}
