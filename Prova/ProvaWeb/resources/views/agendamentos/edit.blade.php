@extends('welcome')

@section('conteudo')

<label for="" class="d-flex justify-content-center">Atualização de Agendamento</label>

<form action="{{route('Agendamentos.update', $agendamento->id)}}" method="post">
    
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="pessoa_id">Nome da Pessoa</label>
        <select name="pessoa_id" id="pessoa_id" class="form-control" required="required">
        <option value={{$agendamento->pessoa->id}}>{{$agendamento->pessoa->nome}}</option>
        @foreach($pessoas as $pessoa)
        <option value={{$pessoa->id}}>{{$pessoa->nome}}</option>
        @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="coleta_id">Local da coleta</label>
        <select name="coleta_id" id="coleta_id" class="form-control" required="required">
        <option value={{$agendamento->coleta->id}}>{{$agendamento->coleta->nome}}</option>
        @foreach($coletas as $coleta)
        <option value={{$coleta->id}}>{{$coleta->nome}}</option>
        @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="data">Data</label>
        <input value="{{$agendamento->data}}" type="date" class="form-control" name="data" id="data">
    </div>


    <div class="text-right">
        <input type="submit" value="Gravar alterações" class="btn btn-primary">
        <input type="reset" value="Limpar" class="btn btn-danger">    
    </div>

</form>

@endsection