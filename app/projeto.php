<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class projeto extends Model
{
    protected $fillable = ['nome_projeto', 'descricao_projeto', 'custo_projeto', 'tempo_de_desenvolvimento'];
    protected $guarded = ['id_projeto', 'created_at', 'update_at'];
    protected $table = 'projeto';
}
