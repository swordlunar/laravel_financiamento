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
            $table->integer('id_criador');
            $table->string('nome_projeto', 200);
            $table->text('descricao_projeto');
            $table->decimal('custo_projeto', 7, 2);
            $table->decimal('custo_atual_projeto', 7, 2)->default('1.0');
            $table->integer('status_projeto')->default('1');
            $table->integer('tempo_de_desenvolvimento');
            $table->string('foto1_projeto', 2000)->default('a');
            $table->string('foto2_projeto', 2000)->default('a');
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
