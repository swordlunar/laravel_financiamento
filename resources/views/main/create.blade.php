@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-12"></div>
        <form action ="{{ route('projeto.store') }}" class="form-horizontal" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
            <div class="row">
            <div class="form-group">
            <input hidden type="hidden" class="form-control" name="id_criador" value="{{ Auth::user()->id }}">
                <label>Nome do Projeto</label>
                <input type="text" class="form-control" name="nome_projeto">
                </div>
            </div>
            <div class="row">
            <div class="form-group">
                <label>Descrição do Projeto</label>
                <input type="textarea" class="form-control" name="descricao_projeto">
                </div>
            </div>
            <div class="row">
            <div class="form-group">
                <label>Custo do Projeto</label>
                <input type="text" class="form-control" name="custo_projeto">
                </div>
            </div>
            <div class="row">
            <div class="form-group">
                <label>Tempo de Desenvolvimento do Projeto</label>
                <input type="text" class="form-control" name="tempo_de_desenvolvimento">
            </div>
            </div>
            <div class="row">
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Selecione o Arquivo:</label>
                 <input type="file" class="form-control" name="foto1_projeto">
            </div>
            </div>
            <div class="row">
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Selecione o Arquivo:</label>
                 <input type="file" class="form-control" name="foto2_projeto">
            </div>
            </div>
            <div class="row">
            <div class="form-group">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
        </div>
        </form>
    </div>



@endsection