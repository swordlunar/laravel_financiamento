@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-12">
            Você está visualizando o projeto: <strong> {{ $projeto->nome_projeto}}</strong>
        </div>
    </div>
@endsection