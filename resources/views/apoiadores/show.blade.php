@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-12">
            <h2 style="text-align:center; margin-top:4%">{{ $projeto->nome_projeto}}</h2>
            <hr>
            <p><h4>Descrição:</h4> {{ $projeto->descricao_projeto}}</p>
            <p> <h4>Custo do Projeto:</h4> R${{ $projeto->custo_projeto}}</p>
            <p> <h4>Tempo Para Desenvolvimento do Projeto:</h4> {{ $projeto->tempo_de_desenvolvimento}} Dias</p>
            <p> <h4>Imagens:</h4><br>
                <div class="row">
                    <div class="col-md-6" style="text-align:center">                
                        <figure>
                            <img src='{{$projeto->foto1_projeto }}' alt="Minha Figura" style="max-width: 500px;max-height: 500px">	
                            <!-- <figcaption>Informações da Figura</figcaption> -->
                        </figure>
                    </div>
                    <div class="col-md-6" style="text-align:center">
                        <figure>
                            <img src='{{$projeto->foto2_projeto }}' alt="Minha Figura"  style="max-width: 500px;max-height: 500px">	
                            <!-- <figcaption>Informações da Figura</figcaption> -->
                        </figure>
                    </div>
                </div>
            </p>

                <p style="text-align:center">
                    <button style="width:200px;margin-bottom:10%; margin-top:5%; border-color: #007680; background-color: #007680;" type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Apoiar Projeto</button>
                </p>

        </div>
    </div>

    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #007680;">
                        <h4 class="modal-title" id="exampleModalLabel" style="color:white"><b>Apoiar Projeto</b></h4>
                        <button type="button" style="color:white" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action ="{{ route('apoiadores_projeto.store') }}" method='POST'>
                        {{csrf_field()}}
                        <input type="hidden" class="form-control" name="id_projeto" value="{{ $projeto->id_projeto}}">
                        <input type="hidden" class="form-control" name="id_apoiador" value="{{ Auth::user()->id }}">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Valor do apoio:</label>
                            <input type="text" class="form-control" name="valor_doado" required>
                        </div>
                    </div>
                    <div class="modal-footer" style="justify-content:center">
                        <button type="button" style="width:200px;margin-bottom:2%; margin-top:1%;" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button type="submit" style="width:200px;margin-bottom:2%; margin-top:1%; border-color: #007680; background-color: #007680;" class="btn btn-primary">Enviar</button>
                    </div>
                    </form>
                </div>
        </div>
    </div>
@endsection