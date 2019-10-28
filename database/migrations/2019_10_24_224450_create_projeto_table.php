<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjetoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projeto', function(Blueprint $table){
            $table->increments('id_projeto');
            $table->string('nome_projeto', 200);
            $table->text('descricao_projeto');
            $table->string('custo_projeto', 6, 2);
            $table->integer('tempo_de_desenvolvimento');
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
        Schema::drop('projeto');
    }
}
