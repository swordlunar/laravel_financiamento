@extends('layouts.app')

@section('content')
    
    <div class="row" style="justify-content:center">
        <div class="col-md-10 col-md-offset-1">
        <form action ="{{ route('projeto.store') }}" class="form-horizontal" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <h1 style="text-align:center;margin-bottom:5%;margin-top:5%;font-size:30px;color: #007680"><b>Criar Projeto</b></h1>
                <div class="form-group">
                    <input hidden type="hidden" class="form-control" name="id_criador" value="{{ Auth::user()->id }}">
                    <label>Nome do Projeto</label>
                    <input type="text" class="form-control" name="nome_projeto" required>
                </div>
                <div class="form-group">
                    <label>Descrição do Projeto</label>
                    <input type="textarea" class="form-control" name="descricao_projeto" required>
                </div>

                <div class="form-row">
                    <div class="col">
                        <label>Custo do Projeto</label>
                        <input type="text" class="form-control" name="custo_projeto" required>
                    </div>
                    <div class="col">
                        <label>Tempo de Desenvolvimento do Projeto</label>
                        <input type="text" class="form-control" name="tempo_de_desenvolvimento" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col">
                        <label for="recipient-name" class="col-form-label">Imagem 1</label>
                        <input type="file" class="form-control" name="foto1_projeto">
                    </div>
                    <div class="col">
                        <label for="recipient-name" class="col-form-label">Imagem 2</label>
                        <input type="file" class="form-control" name="foto2_projeto">
                    </div>
                </div>

                <div class="form-group" style="margin-top:5%; text-align:center;">
                    <button type="submit" onclick="return confirm('Deseja realmente criar esse projeto?')" class="btn btn-primary" style="width:200px;background-color: #007680;border-color: #007680">Enviar</button>
                </div>

            </form>
        </div>
    </div>
@endsection