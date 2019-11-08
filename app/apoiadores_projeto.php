<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class apoiadores_projeto extends Model
{
    protected $fillable = ['id_projeto', 'id_apoiador', 'valor_doado','imagem1','imagem2'];
    protected $guarded = ['created_at', 'update_at'];	
    protected $primaryKey = 'id_doacao';
    protected $table = 'apoiadores_projeto';
}
