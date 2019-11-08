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
                <br>
                <!-- Modal grande -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Apoiar Projeto</button>

                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Nova mensagem</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action ="{{ route('apoiadores_projeto.store') }}" method='POST'>
                        {{csrf_field()}}
                        <input type="hidden" class="form-control" name="id_projeto" value="{{ $projeto->id_projeto}}">
                        <input type="hidden" class="form-control" name="id_apoiador" value="{{ Auth::user()->id }}">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Valor de apoio:</label>
                            <input type="text" class="form-control" name="valor_doado">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                    </form>
                    </div>
                </div>
                </div>
        </div>
    </div>
@endsection