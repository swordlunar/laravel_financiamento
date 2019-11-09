@extends('layouts.app')

@section('content')
<form action ="{{ route('apoiadores_projeto.upload') }}" method='POST' enctype="multipart/form-data">
                        {{csrf_field()}}
                        <input name="_method" type="hidden" value="PATCH">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Selecione o Arquivo:</label>
                            <input type="file" class="form-control" name="imagem1">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                    </form>
@endsection