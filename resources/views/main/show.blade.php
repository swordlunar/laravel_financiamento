@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-12">
            <h2 style="text-align:center; margin-top:4%">{{ $projeto->nome_projeto}}</h2>
            <hr>
            <p><h4>Descrição:</h4> {{ $projeto->descricao_projeto}}</p>
            <p> <h4>Custo do Projeto:</h4> {{ $projeto->custo_projeto}}</p>
            <p> <h4>Tempo Para Desenvolvimento do Projeto:</h4> {{ $projeto->tempo_de_desenvolvimento}}</p>
            <p> <h4>Imagens:</h4><br>
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