@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-12">

            <table class="table">
                <tbody>
                  <tr class="row">
                    @foreach($projeto as $projeto)
                      <p></p>

                    <td style="border-top:0px solid">

                    <div class="card" style="width: 17rem">
                        <img src='{{$projeto->foto1_projeto }}' alt="Minha Figura" style="height:170px">	
                        <div class="card-body">
                            <h5 class="card-title">{{ $projeto->nome_projeto }}</h5>
                            <p class="card-text">
                                custo do projeto: {{ $projeto->custo_projeto }}
                            </p>
                            <a href="{{ route('projeto.show', ['projeto' => $projeto->id_projeto]) }}">Visualizar</a>
                            <a href="{{ route('projeto.edit', ['projeto' => $projeto->id_projeto]) }}">Editar</a>
                            <a href="{{ route('projeto.destroy', ['projeto' => $projeto->id_projeto]) }}">Apagar</a>
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