@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-12">
            
            <table class="table table-striped">
            <thead class="thead-light">
                <tr>
                <th scope="col">Projeto</th>
                <th scope="col">Custo</th>
                <th scope="col">Opções</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                @foreach($projetos as $projeto)
                <td>{{ $projeto->nome_projeto }}</td>
                <td>{{ $projeto->custo_projeto }}</td>
                <td>
                        <a href="{{ route('projeto.show', ['projeto' => $projeto->id]) }}">Visualizar</a>
                        <a href="{{ route('projeto.edit', ['projeto' => $projeto->id]) }}">Editar</a>
                        <a href="{{ route('projeto.destroy', ['projeto' => $projeto->id]) }}">Apagar</a>
                </td>
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>
    </div>

@endsection