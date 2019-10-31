<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class projeto extends Model
{
    protected $fillable = ['nome_projeto', 'descricao_projeto', 'custo_projeto', 'tempo_de_desenvolvimento','status_projeto', 'custo_atual_projeto','foto1_projeto', 'foto2_projeto'];
    protected $guarded = ['created_at', 'update_at'];	
    protected $primaryKey = 'id_projeto';
    protected $table = 'projeto';
}
