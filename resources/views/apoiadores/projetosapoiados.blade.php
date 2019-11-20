@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-12">

            <table class="table">
                <tbody>
                  <tr class="row">
                    @foreach($projetos as $projeto)
                    
                    @if ($projeto->id_apoiador == Auth::user()->id )
                      

                    <td style="border-top:0px solid">

                    <div class="card" style="width: 18rem;">
                        <img src='{{$projeto->foto1_projeto }}' alt="Minha Figura" style="height:170px">	
                        <div class="card-body">
                            <h5 class="card-title " style="color: #007680"><b>{{ $projeto->nome_projeto }}</b></h5>
                            <p class="card-text">
                                Custo do Projeto: R$ {{ $projeto->custo_projeto }}
                                <br>
                                Valor Doado: R$ {{ $projeto->valor_doado}}
                            </p>
                                <div style="text-align:center">
                                  <a style="color: #007680" href="{{ route('apoiadores_projeto.show', ['projeto' => $projeto->id_projeto]) }}">Apoiar <i class="fas fa-hands-helping"></i></a>
                                </div>
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