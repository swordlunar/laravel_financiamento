@extends('layouts.app')
<head>
<title> Mostrar Projeto </title>
</head>
@section('content')
    <div class="container">
        <div class="col-md-12">
            <h2 style="text-align:center; margin-top:4%; color:#007680"><b>{{ $projeto->nome_projeto}}</b></h2>
            <hr>
            <p><h4 style=";color:#007680"><b>Descrição:</b></h4>{{ $projeto->descricao_projeto}}</p>
            <p> <h4 style=";color:#007680"><b>Custo do Projeto:</b></h4> R$ {{ $projeto->custo_projeto}}</p>
            <p> <h4 style=";color:#007680"><b>Tempo Para Desenvolvimento do Projeto:</b></h4> {{ $projeto->tempo_de_desenvolvimento}} Dias</p>
            <p> <h4 style=";color:#007680"><b>Imagens:</b></h4><br>
                <div class="row">
                    <div class="col-md-6">                
                        <figure>
                            <img src='{{$projeto->foto1_projeto }}' alt="Minha Figura" style="max-width: 500px">	
                            <!-- <figcaption>Informações da Figura</figcaption> -->
                        </figure>
                    </div>
                    <div class="col-md-6">
                        <figure>
                            <img src='{{$projeto->foto2_projeto }}' alt="Minha Figura"  style="max-width: 500px">	
                            <!-- <figcaption>Informações da Figura</figcaption> -->
                        </figure>
                    </div>
                </div>
            </p>
        </div>
    </div>
@endsection