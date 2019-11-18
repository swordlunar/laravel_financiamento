@extends('layouts.app')

@section('content')

    <div class="row" style="justify-content:center">
        <div class="col-md-10 col-md-offset-1">
            <form action ="{{ route('projeto.update', ['projeto' => $projeto->id_projeto]) }}" class="form-horizontal" method='POST'>
                {{csrf_field()}}
                {{ method_field('PUT') }}
                <h1 style="text-align:center;margin-bottom:5%;margin-top:5%;font-size:30px;color: #007680"><b>Editar Projeto</b></h1>
                <div class="form-group">
                    <label>Nome do Projeto</label>
                    <input type="text" class="form-control" name="nome_projeto" value="{{ old('projeto', $projeto->nome_projeto) }}">
                </div>

                <div class="form-group">
                    <label>Descrição do Projeto</label>
                    <input type="textarea" class="form-control" name="descricao_projeto" value="{{ old('projeto', $projeto->descricao_projeto) }}">
                </div>


                <div class="form-row">
                    <div class="col">
                        <label>Custo do Projeto</label>
                        <input type="text" class="form-control" name="custo_projeto" value="{{ old('projeto', $projeto->custo_projeto) }}">
                    </div>
                    <div class="col">
                        <label>Tempo de Desenvolvimento do Projeto</label>
                        <input type="text" class="form-control" name="tempo_de_desenvolvimento" value="{{ old('projeto', $projeto->tempo_de_desenvolvimento) }}">
                    </div>
                </div>
                
                @if ($projeto->status_projeto == 1)
                <div class="form-group" style="width:150px">
                    <label>Status Projeto:</label>
                    <select class="form-control" name="status_projeto">
                        <option value="1">Ativo</option>
                        <option value="0">Desativado</option>
                    </select>
                </div>

                @else
                <div class="form-group"  style="width:150px">
                    <label>Status Projeto:</label>
                    <select class="form-control" name="status_projeto">
                        <option value="0">Desativado</option>
                        <option value="1">Ativo</option>
                    </select>
                </div>

                @endif
                <div class="form-group" style="margin-top:5%; text-align:center;">
                <button style="width:200px;background-color: #007680;border-color: #007680" type="submit" class="btn btn-primary">Enviar</button>
            </div>
            </form>
        </div>
    </div>



@endsection