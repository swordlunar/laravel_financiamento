@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-12"></div>
        <form action ="{{ route('projeto.update', ['projeto' => $projeto->id_projeto]) }}" class="form-horizontal" method='POST'>
        {{csrf_field()}}
        {{ method_field('PUT') }}
  
            <div class="row">
            <div class="form-group">
                <label>Nome do Projeto</label>
                <input type="text" class="form-control" name="nome_projeto" value="{{ old('projeto', $projeto->nome_projeto) }}">
                </div>
            </div>
            <div class="row">
            <div class="form-group">
                <label>Descrição do Projeto</label>
                <input type="textarea" class="form-control" name="descricao_projeto" value="{{ old('projeto', $projeto->descricao_projeto) }}">
                </div>
            </div>
            <div class="row">
            <div class="form-group">
                <label>Custo do Projeto</label>
                <input type="text" class="form-control" name="custo_projeto" value="{{ old('projeto', $projeto->custo_projeto) }}">
                </div>
            </div>
            <div class="row">
            <div class="form-group">
                <label>Tempo de Desenvolvimento do Projeto</label>
                <input type="text" class="form-control" name="tempo_de_desenvolvimento" value="{{ old('projeto', $projeto->tempo_de_desenvolvimento) }}">
            </div>
            </div>
            @if ($projeto->status_projeto == 1)

            <div class="row">
            <div class="form-group">
                <label>Status Projeto:</label>
                <select class="form-control" name="status_projeto">
                    <option value="1">Ativo</option>
                    <option value="0">Desativo</option>
                </select>
            </div>
            </div>

            @else

            <div class="row">
            <div class="form-group">
                <label>Status Projeto:</label>
                <select class="form-control" name="status_projeto">
                    <option value="0">Desativo</option>
                    <option value="1">Ativo</option>
                </select>
            </div>
            </div>
            @endif
            <div class="row">
            <div class="form-group">
            <button type="submit" class="btn btn-default">Editar Projeto</button>
        </div>
        </div>
        </form>
    </div>



@endsection