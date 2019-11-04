@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-12">
            <h3> Você está visualizando o projeto: {{ $projeto->nome_projeto}}</h3>
            <h3> Descrição do Projeto: </h3>
                {{ $projeto->descricao_projeto}}
            <h3> Custo do Projeto: </h3>
                {{ $projeto->custo_projeto}}
            <h3> Tempo Para Desenvolvimento do Projeto: </h3>
                {{ $projeto->tempo_de_desenvolvimento}}
            <h3> Id Usuário: </h3>
                {{ Auth::user()->id }}
        </div>
    </div>
@endsection