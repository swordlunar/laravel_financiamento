@extends('layouts.app')
<head>
<title> Projetos Criados </title>
</head>
@section('content')
    <div class="container">
        <div class="col-md-12">
        <h1 style="text-align:center;margin-bottom:5%;margin-top:5%;font-size:30px;color: #007680"><b>Projetos Criados</b></h1>
            <table class="table">
                <tbody>
                  <tr class="row">
                    @foreach($projeto as $projeto)
                      <p></p>

                    <td style="border-top:0px solid">

                    <div class="card" style="width: 17rem">
                        <img src='{{$projeto->foto1_projeto }}' alt="Minha Figura" style="height:170px">	
                        <div class="card-body">
                            <h5 class="card-title" style="color: #007680"><b>{{ $projeto->nome_projeto }}</b></h5>
                            <p class="card-text">
                                Custo do Projeto: R$ {{ $projeto->custo_projeto }}
                            </p>
                            <div style="text-align:center">
                              <a style="color: #007680" href="{{ route('projeto.show', ['projeto' => $projeto->id_projeto]) }}">Visualizar <i class="fas fa-eye"></i></a><br>
                              <a style="color: #007680" href="{{ route('projeto.edit', ['projeto' => $projeto->id_projeto]) }}">Editar <i class="fas fa-edit"></i></a><br>
                              <a style="color: #007680" onclick="return confirm('Deseja realmente excluir o projeto selecionado?')" href="{{ route('projeto.destroy', ['projeto' => $projeto->id_projeto]) }}">Apagar <i class="fas fa-trash-alt"></i></a>
                            </div>
                        </div>
                    </div>
                        
                    </td>
                    @endforeach
                    
                  </tr>
                </tbody>
              </table>

        </div>
    </div>

@endsection