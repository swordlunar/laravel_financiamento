@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-12">

            <table class="table">
                <tbody>
                  <tr class="row">
                    @foreach($projetos as $projeto)

                    @if ($projeto->id_criador != Auth::user()->id )
                      <p></p>

                    <td style="border-top:0px solid">

                    <div class="card" style="width: 18rem;">
                        <img src='{{$projeto->foto1_projeto }}' alt="Minha Figura" style="height:170px">	
                        <div class="card-body">
                            <h5 class="card-title">{{ $projeto->nome_projeto }}</h5>
                            <p class="card-text">
                                custo do projeto: {{ $projeto->custo_projeto }}
                                valor doado: {{ $projeto->valor_doado}}
                            </p>
                                <a href="{{ route('apoiadores_projeto.show', ['projeto' => $projeto->id_projeto]) }}">Apoiar</a>
                        </div>
                    </div>
                        
                    </td>
                    @endif
                    @endforeach
                   
                  </tr>
                </tbody>
              </table>
              
        </div>
    </div>

@endsection