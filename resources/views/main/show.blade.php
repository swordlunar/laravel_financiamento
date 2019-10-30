@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-12">
            Você está visualizando o projeto: <strong> {{ $projeto->nome_projeto}}</strong>
            <h3> Descrição do Projeto </h3>
            {{ $projeto->descricao_projeto}}
        </div>
    </div>
@endsection