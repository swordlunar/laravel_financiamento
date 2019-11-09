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
                <figure>
                    <img src='{{$projeto->foto1_projeto }}' alt="Minha Figura">	
                    <figcaption>Informações da Figura</figcaption>
                </figure>
                <figure>
                    <img src='{{$projeto->foto2_projeto }}' alt="Minha Figura">	
                    <figcaption>Informações da Figura</figcaption>
                </figure>
        </div>
    </div>
@endsection