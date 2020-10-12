@extends('welcome')

@section('conteudo')

<label for="" class="d-flex justify-content-center">Cadastro de novo agendamento</label>

<form action="{{route('Agendamentos.store')}}" method="post">
    
    @csrf

    <div class="form-group">
        <label for="pessoa_id">Nome</label>
        <select name="pessoa_id" id="pessoa_id" class="form-control" required="required">
        @foreach($pessoas as $pessoa)
        <option value="{{$pessoa->id}}">{{$pessoa->nome}}</option>
        @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="coleta_id">Coleta</label>
        <select name="coleta_id" id="coleta_id" class="form-control" required="required">
        @foreach($coletas as $coleta)
        <option value="{{$coleta->id}}">{{$coleta->nome}}</option>
        @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="data">Data</label>
        <input type="date" class="form-control" name="data" id="data">
    </div>


    <div class="text-right">
        <input type="submit" value="Cadastrar" class="btn btn-primary">
        <input type="reset" value="Limpar" class="btn btn-danger">    
    </div>

</form>

@endsection